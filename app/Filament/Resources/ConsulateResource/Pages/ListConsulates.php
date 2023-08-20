<?php

namespace App\Filament\Resources\ConsulateResource\Pages;

use App\Filament\Resources\ConsulateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConsulates extends ListRecords
{
    protected static string $resource = ConsulateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
