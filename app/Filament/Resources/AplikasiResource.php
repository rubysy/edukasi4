<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AplikasiResource\Pages;
use App\Models\Aplikasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AplikasiResource extends Resource
{
    protected static ?string $model = Aplikasi::class;
    protected static ?string $navigationIcon = 'heroicon-o-device-phone-mobile';
    protected static ?string $navigationLabel = 'Aplikasi Content';
    protected static ?string $pluralModelLabel = 'Aplikasi Content';

    protected static ?string $navigationGroup = 'Layanan Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label('Screenshot/Mockup Aplikasi')
                    ->image()
                    ->directory('aplikasi-images')
                    ->imagePreviewHeight(fn ($operation) => $operation === 'create' ? '250' : null)
                    ->disablePreview(fn ($operation) => $operation === 'edit')
                    ->disk('public')
                    ->visibility('public')
                    ->required()
                    ->imagePreviewHeight('300')
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp'])
                    ->maxSize(5120)
                    ->helperText('Upload mockup/screenshot aplikasi (max 5MB)'),

                    Forms\Components\CheckboxList::make('tech_stacks')
                    ->label('Tech Stack')
                    ->options([
                        'Laravel' => 'Laravel',
                        'PHP' => 'PHP', 
                        'MySQL' => 'MySQL',
                        'PostgreSQL' => 'PostgreSQL',
                        'React' => 'React',
                        'Vue.js' => 'Vue.js',
                        'Node.js' => 'Node.js',
                        'JavaScript' => 'JavaScript',
                        'TypeScript' => 'TypeScript',
                        'Python' => 'Python',
                        'MongoDB' => 'MongoDB',
                        'Docker' => 'Docker',
                        'TailwindCSS' => 'Tailwind CSS',
                        'Bootstrap' => 'Bootstrap',
                    ])
                    ->columns(3)
                    ->helperText('Pilih teknologi yang digunakan (bisa multiple)'),
                    
                Forms\Components\TextInput::make('judul')
                    ->label('Nama Aplikasi')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('contoh: E-Learning Management System'),
                    
                Forms\Components\Textarea::make('deskripsi')
                    ->label('Deskripsi Aplikasi')
                    ->required()
                    ->rows(4)
                    ->placeholder('Jelaskan fitur dan kegunaan aplikasi...'),
                    
                    
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'aktif' => 'Aktif',
                        'pengembangan' => 'Dalam Pengembangan', 
                        'maintenance' => 'Maintenance',
                        'tidak digunakan' => 'Tidak Digunakan'
                    ])
                    ->default('active')
                    ->required(),
                    
                Forms\Components\Select::make('order')
                    ->label('Urutan Tampil')
                    ->options(function ($record) {
                        $usedOrders = Aplikasi::where('id', '!=', $record?->id ?? 0)
                                            ->pluck('order', 'judul')
                                            ->toArray();
                        
                        $availableOrders = [];
                        
                        // Show what's taken (disabled) and what's available
                        for ($i = 1; $i <= 20; $i++) {
                            $takenBy = array_search($i, $usedOrders);
                            if ($takenBy) {
                                // Skip taken positions
                                continue;
                            } else {
                                $availableOrders[$i] = "Posisi $i";
                            }
                        }
                        
                        return $availableOrders;
                    })
                    ->required()
                    ->reactive()
                    ->helperText('Hanya posisi yang tersedia yang ditampilkan'),
                    
                Forms\Components\Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true)
                    ->helperText('Hanya aplikasi aktif yang ditampilkan di website')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Screenshot')
                    ->disk('public')
                    ->height(60)
                    ->width(80),
                    
                Tables\Columns\TextColumn::make('judul')
                    ->label('Nama Aplikasi')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->limit(50)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();
                        return strlen($state) > 50 ? $state : null;
                    }),
                    
               Tables\Columns\TextColumn::make('tech_stacks')
                    ->label('Tech Stack')
                    ->formatStateUsing(function ($state) {
                        // Fix: Handle different data types properly
                        if (empty($state)) {
                            return 'Not specified';
                        }
                        
                        // If it's already a string, return as is
                        if (is_string($state)) {
                            return $state;
                        }
                        
                        // If it's an array, implode it
                        if (is_array($state)) {
                            return implode(', ', $state);
                        }
                        
                        // Try to decode JSON if it's JSON string
                        if (is_string($state) && json_decode($state, true)) {
                            $decoded = json_decode($state, true);
                            if (is_array($decoded)) {
                                return implode(', ', $decoded);
                            }
                        }
                        
                        // Fallback
                        return 'Not specified';
                    })
                    ->limit(30)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();
                        if (empty($state)) return null;
                        
                        if (is_array($state)) {
                            $fullText = implode(', ', $state);
                        } else {
                            $fullText = is_string($state) ? $state : 'Not specified';
                        }
                        
                        return strlen($fullText) > 30 ? $fullText : null;
                    }),
                    
                Tables\Columns\BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'success' => 'active',
                        'warning' => 'development',
                        'danger' => 'maintenance',
                        'gray' => 'deprecated'
                    ]),
                    
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),
                    
                Tables\Columns\TextColumn::make('order')
                    ->label('Order')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'active' => 'Active',
                        'development' => 'In Development',
                        'maintenance' => 'Maintenance', 
                        'deprecated' => 'Deprecated'
                    ]),
                    
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status Aktif')
                    ->boolean()
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAplikasis::route('/'),
            'create' => Pages\CreateAplikasi::route('/create'),
            'edit' => Pages\EditAplikasi::route('/{record}/edit'),
        ];
    }
}