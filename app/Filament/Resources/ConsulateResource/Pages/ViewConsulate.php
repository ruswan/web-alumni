<?php

namespace App\Filament\Resources\ConsulateResource\Pages;

use App\Filament\Resources\ConsulateResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewConsulate extends ViewRecord
{
    protected static string $resource = ConsulateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
