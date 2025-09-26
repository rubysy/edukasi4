<?php

namespace App\Filament\Resources\ProfilImageResource\Pages;

use App\Filament\Resources\ProfilImageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfilImage extends EditRecord
{
    protected static string $resource = ProfilImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
