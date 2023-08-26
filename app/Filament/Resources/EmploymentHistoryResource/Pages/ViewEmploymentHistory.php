<?php

namespace App\Filament\Resources\EmploymentHistoryResource\Pages;

use App\Filament\Resources\EmploymentHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewEmploymentHistory extends ViewRecord
{
    protected static string $resource = EmploymentHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
