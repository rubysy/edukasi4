<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KolaborasiResource\Pages;
use App\Filament\Resources\KolaborasiResource\RelationManagers;
use App\Models\Kolaborasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KolaborasiResource extends Resource
{
    protected static ?string $model = Kolaborasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

 public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('nama')
                ->required()
                ->maxLength(255),
            Forms\Components\Select::make('kategori')
                ->options([
                    'perusahaan' => 'Perusahaan',
                    'akademisi' => 'Akademisi',
                ])
                ->required(),
            Forms\Components\FileUpload::make('logo')
                ->image()
                ->directory('kolaborasi-logos')
                ->required(),
        ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('nama')->searchable(),
            Tables\Columns\TextColumn::make('kategori')->sortable(),
            Tables\Columns\ImageColumn::make('logo')->disk('public'),
        ])
        ->filters([
            //
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
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
            'index' => Pages\ListKolaborasis::route('/'),
            'create' => Pages\CreateKolaborasi::route('/create'),
            'edit' => Pages\EditKolaborasi::route('/{record}/edit'),
        ];
    }
}
