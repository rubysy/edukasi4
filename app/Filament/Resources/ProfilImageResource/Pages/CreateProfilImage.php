<?php

namespace App\Filament\Resources\ProfilImageResource\Pages;

use App\Filament\Resources\ProfilImageResource;
use App\Models\ProfilImage;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateProfilImage extends CreateRecord
{
    protected static string $resource = ProfilImageResource::class;

    protected function beforeCreate(): void
    {
        // Cek total images
        $totalImages = ProfilImage::count();
        if ($totalImages >= 2) {
            Notification::make()
                ->title('Cannot Create Image')
                ->body('Maximum 2 images allowed. Please delete existing images first.')
                ->danger()
                ->send();
                
            $this->halt();
        }

        // Cek apakah position yang dipilih sudah ada
        $position = $this->data['position'];
        $existingImage = ProfilImage::where('position', $position)->first();
        
        if ($existingImage) {
            Notification::make()
                ->title('Position Already Taken')
                ->body("An image already exists for this position. Please choose another position or edit the existing image.")
                ->danger()
                ->send();
                
            $this->halt();
        }
    }

    protected function afterCreate(): void
    {
        $position = $this->record->position;
        $positionName = $position == 1 ? 'Top Card' : 'Bottom Card';
        
        Notification::make()
            ->title('Image Created Successfully')
            ->body("Profile image for {$positionName} has been created and will be displayed on the profile page.")
            ->success()
            ->send();
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}