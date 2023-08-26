<?php

namespace App\Filament\Resources\UserResource\Pages;

use Filament\Actions;
use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\ListRecords;
use Konnco\FilamentImport\Actions\ImportField;
use Konnco\FilamentImport\Actions\ImportAction;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ImportAction::make()
            ->fields([
                ImportField::make('name')
                    ->label('Name')
                    ->required()
                    ->helperText('Nama lengkap alumni'),
                ImportField::make('email'),
                ImportField::make('phone_number'),
                ImportField::make('entry_year'),
                ImportField::make('graduation_id')
                    ->rules('nullable|numeric'),
                ImportField::make('major_id')
                    ->rules('nullable|numeric'),
                ImportField::make('consulate_id')
                    ->rules('nullable|numeric'),
            ]),
            Actions\CreateAction::make(),
        ];
    }
}
