<?php

namespace App\Filament\Resources\PageFooterResource\Pages;

use App\Filament\Resources\PageFooterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageFooter extends EditRecord
{
    protected static string $resource = PageFooterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
