<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KonsultanResource\Pages;
use App\Filament\Resources\KonsultanResource\RelationManagers;
use App\Models\Konsultan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KonsultanResource extends Resource
{
    protected static ?string $model = Konsultan::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

        protected static ?string $navigationLabel = 'Konsultan Content';

    protected static ?string $pluralModelLabel = 'Konsultan Content';

    protected static ?string $navigationGroup = 'Layanan Management';

   public static function form(Form $form): Form
{
    return $form->schema([
        Forms\Components\TextInput::make('judul')
            ->required()
            ->maxLength(255),
        Forms\Components\Textarea::make('deskripsi')
            ->rows(5)
            ->nullable(),
        Forms\Components\FileUpload::make('image')
            ->image()
            ->directory('konsultan')
            ->imagePreviewHeight(fn ($operation) => $operation === 'create' ? '250' : null)
            ->disablePreview(fn ($operation) => $operation === 'edit') // Only disable on edit
            ->required(),
    ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\ImageColumn::make('image')->disk('public'),
            Tables\Columns\TextColumn::make('judul')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('deskripsi')->limit(50),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ]);
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
            'index' => Pages\ListKonsultans::route('/'),
            'create' => Pages\CreateKonsultan::route('/create'),
            'edit' => Pages\EditKonsultan::route('/{record}/edit'),
        ];
    }
}
