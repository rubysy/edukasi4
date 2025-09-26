<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfilImageResource\Pages;
use App\Filament\Resources\ProfilImageResource\RelationManagers;
use App\Models\ProfilImage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Notifications\Notification;
use Filament\Support\Enums\ActionSize;

class ProfilImageResource extends Resource
{
    protected static ?string $model = ProfilImage::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationLabel = 'Profil Images';

    protected static ?string $pluralModelLabel = 'Profil Images';

    protected static ?string $navigationGroup = 'Profil Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->directory('profil-images')
                    ->disk('public')
                    ->visibility('public')
                    ->required()
                    ->imagePreviewHeight(fn ($operation) => $operation === 'create' ? '250' : null)
                    ->disablePreview(fn ($operation) => $operation === 'edit') // Only disable on edit
                    ->loadingIndicatorPosition('left')
                    ->panelAspectRatio('2:1')
                    ->panelLayout('integrated')
                    ->removeUploadedFileButtonPosition('right')
                    ->uploadButtonPosition('left')
                    ->uploadProgressIndicatorPosition('left')
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp'])
                    ->maxSize(5120),
                    
                Forms\Components\TextInput::make('title')
                    ->label('Title (Optional)')
                    ->maxLength(255)
                    ->helperText('Opsional - untuk keperluan identifikasi di admin'),
                    
                Forms\Components\Textarea::make('description')
                    ->label('Description (Optional)')
                    ->rows(3)
                    ->helperText('Opsional - deskripsi gambar untuk keperluan admin'),
                    
                Forms\Components\Select::make('position')
                    ->label('Card Position')
                    ->options(function () {
                        $options = [];
                        
                        // Cek apakah sudah ada image untuk position 1
                        $topImageExists = ProfilImage::where('position', 1)->exists();
                        if (!$topImageExists) {
                            $options[1] = 'Top Image Card (Card pertama)';
                        }
                        
                        // Cek apakah sudah ada image untuk position 2
                        $bottomImageExists = ProfilImage::where('position', 2)->exists();
                        if (!$bottomImageExists) {
                            $options[2] = 'Bottom Image Card (Card kedua)';
                        }
                        
                        // Kalau edit, tetap tampilkan posisi yang sedang dipilih
                        if (request()->route('record')) {
                            $currentRecord = ProfilImage::find(request()->route('record'));
                            if ($currentRecord) {
                                if ($currentRecord->position == 1) {
                                    $options[1] = 'Top Image Card (Card pertama)';
                                } elseif ($currentRecord->position == 2) {
                                    $options[2] = 'Bottom Image Card (Card kedua)';
                                }
                            }
                        }
                        
                        return $options;
                    })
                    ->required()
                    ->helperText('Pilih posisi card mana yang akan menampilkan gambar ini'),
                    
                Forms\Components\Toggle::make('is_active')
                    ->label('Active')
                    ->default(true)
                    ->required()
                    ->helperText('Hanya gambar yang aktif yang akan ditampilkan')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->height(80)
                    ->width(120),
                    
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->limit(30)
                    ->placeholder('No title'),
                    
                Tables\Columns\TextColumn::make('position')
                    ->label('Position')
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        '1' => 'Top Card',
                        '2' => 'Bottom Card',
                        default => 'Unknown',
                    })
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        '1' => 'success',
                        '2' => 'info',
                        default => 'gray',
                    }),
                    
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('position')
                    ->label('Card Position')
                    ->options([
                        1 => 'Top Card',
                        2 => 'Bottom Card',
                    ]),
                    
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status')
                    ->boolean()
                    ->trueLabel('Active only')
                    ->falseLabel('Inactive only')
                    ->native(false),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('position', 'asc')
            ->reorderable('order');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfilImages::route('/'),
            'create' => Pages\CreateProfilImage::route('/create'),
            'edit' => Pages\EditProfilImage::route('/{record}/edit'),
        ];
    }

    // Override canCreate untuk hide create button kalau sudah ada 2 images
    public static function canCreate(): bool
    {
        $totalImages = ProfilImage::count();
        return $totalImages < 2;
    }
}