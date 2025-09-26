<?php

namespace App\Filament\Resources\ProfilImageResource\Pages;

use App\Filament\Resources\ProfilImageResource;
use App\Models\ProfilImage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Notifications\Notification;
use Filament\Support\Enums\ActionSize;

class ListProfilImages extends ListRecords
{
    protected static string $resource = ProfilImageResource::class;

    protected function getHeaderActions(): array
    {
        $totalImages = ProfilImage::count();
        
        if ($totalImages >= 2) {
            Notification::make()
                ->title('Maximum Images Reached')
                ->body('You already have 2 profile images (maximum allowed). Please edit or delete existing images to add new ones.')
                ->warning()
                ->persistent()
                ->send();
            
            return [];
        }
        
        return [
            Actions\CreateAction::make()
                ->icon('heroicon-m-plus')
                ->size(ActionSize::Small),
        ];
    }

    public function getTitle(): string
    {
        $totalImages = ProfilImage::count();
        return "Profil Images ({$totalImages}/2)";
    }

    public function getHeading(): string
    {
        $totalImages = ProfilImage::count();
        
        if ($totalImages >= 2) {
            return 'Profil Images (Maximum Reached - 2/2)';
        }
        
        return "Profil Images ({$totalImages}/2)";
    }
}