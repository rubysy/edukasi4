<?php

namespace App\Filament\Resources\KonsultanResource\Pages;

use App\Filament\Resources\KonsultanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKonsultans extends ListRecords
{
    protected static string $resource = KonsultanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
