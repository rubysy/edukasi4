<?php

namespace App\Filament\Resources\KonsultanResource\Pages;

use App\Filament\Resources\KonsultanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKonsultan extends EditRecord
{
    protected static string $resource = KonsultanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
