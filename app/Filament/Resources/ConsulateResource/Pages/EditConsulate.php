<?php

namespace App\Filament\Resources\ConsulateResource\Pages;

use App\Filament\Resources\ConsulateResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConsulate extends EditRecord
{
    protected static string $resource = ConsulateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
