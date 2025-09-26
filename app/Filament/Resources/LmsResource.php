<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LmsResource\Pages;
use App\Models\Lms;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class LmsResource extends Resource
{
    protected static ?string $model = Lms::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationLabel = 'LMS Content';

    protected static ?string $pluralModelLabel = 'LMS Content';

    protected static ?string $navigationGroup = 'Layanan Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type')
                    ->label('Tipe Konten')
                    ->options(function () {
                        // buat cek sudah ada narasi/text
                        $hasTextContent = Lms::where('type', 'text')->exists();
                        
                        $options = [];
                        
                       
                        if (!$hasTextContent) {
                            $options['text'] = 'Narasi/Text';
                        }
                        
                        // opsi image selalu tersedia
                        $options['image'] = 'Gambar';
                        
                        return $options;
                    })
                    ->required()
                    ->live()
                    ->helperText(function () {
                        $hasTextContent = Lms::where('type', 'text')->exists();
                        return $hasTextContent 
                            ? 'Narasi/Text sudah ada - Hanya bisa menambah Gambar' 
                            : 'Pilih apakah ini konten text atau gambar';
                    }),
                    
                Forms\Components\TextInput::make('title')
                    ->label('Title (Optional)')
                    ->maxLength(255)
                    ->helperText('Opsional - untuk keperluan identifikasi di admin'),
                    
                Forms\Components\Textarea::make('content')
                    ->label('Narasi/Konten Text')
                    ->rows(4)
                    ->visible(fn (callable $get) => $get('type') === 'text')
                    ->required(fn (callable $get) => $get('type') === 'text')
                    ->helperText('Konten narasi yang akan ditampilkan di card text'),
                    
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->directory('lms-images')
                    ->visible(fn (callable $get) => $get('type') === 'image')
                    ->required(fn (callable $get) => $get('type') === 'image')
                    ->imagePreviewHeight('200')
                    ->loadingIndicatorPosition('left')
                    ->panelAspectRatio('3:1')
                    ->panelLayout('integrated')
                    ->removeUploadedFileButtonPosition('right')
                    ->uploadButtonPosition('left')
                    ->uploadProgressIndicatorPosition('left'),
                    
                Forms\Components\Toggle::make('is_active')
                    ->label('Active')
                    ->default(true)
                    ->required()
                    ->helperText('Hanya konten yang aktif yang akan ditampilkan')
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type')
                    ->label('Tipe')
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'text' => 'Narasi/Text',
                        'image' => 'Gambar',
                        default => 'Unknown',
                    })
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'text' => 'success',
                        'image' => 'info',
                        default => 'gray',
                    }),
                    
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->limit(30)
                    ->placeholder('No title'),
                    
               Tables\Columns\TextColumn::make('content')
                    ->label('Content Preview')
                    ->limit(50)
                    ->placeholder('No content'),
                    
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->height(60)
                    ->width(80),
                    
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
                    
                Tables\Columns\TextColumn::make('order')
                    ->label('Order')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->label('Tipe Konten')
                    ->options([
                        'text' => 'Narasi/Text',
                        'image' => 'Gambar',
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
            ->defaultSort('order', 'asc')
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
            'index' => Pages\ListLms::route('/'),
            'create' => Pages\CreateLms::route('/create'),
            'edit' => Pages\EditLms::route('/{record}/edit'),
        ];
    }
}