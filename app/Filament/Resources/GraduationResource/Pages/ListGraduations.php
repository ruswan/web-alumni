<?php

namespace App\Filament\Resources\GraduationResource\Pages;

use App\Filament\Resources\GraduationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGraduations extends ListRecords
{
    protected static string $resource = GraduationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
