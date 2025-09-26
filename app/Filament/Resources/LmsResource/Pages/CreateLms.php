<?php

namespace App\Filament\Resources\LmsResource\Pages;

use App\Filament\Resources\LmsResource;
use App\Models\Lms;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateLms extends CreateRecord
{
    protected static string $resource = LmsResource::class;
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    
    public function mount(): void
    {
        parent::mount();
        
        // Cek apakah sudah ada narasi/text
        $hasTextContent = Lms::where('type', 'text')->exists();
        
        if ($hasTextContent) {
            Notification::make()
                ->title('Info')
                ->body('Konten Narasi/Text sudah ada. Anda hanya dapat menambahkan konten Gambar.')
                ->info()
                ->persistent()
                ->send();
        }
    }
}
