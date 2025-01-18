<?php

namespace App\Filament\Resources\ArtikelUtamaResource\Pages;

use App\Filament\Resources\ArtikelUtamaResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageArtikelUtamas extends ManageRecords
{
    protected static string $resource = ArtikelUtamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
