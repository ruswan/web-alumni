<?php

namespace App\Filament\Resources\GraduationResource\Pages;

use App\Filament\Resources\GraduationResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewGraduation extends ViewRecord
{
    protected static string $resource = GraduationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
