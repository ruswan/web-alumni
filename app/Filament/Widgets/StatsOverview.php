<?php

namespace App\Filament\Widgets;

use App\Models\Consulate;
use App\Models\Event;
use App\Models\Graduation;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::count()),
            Stat::make('Consulates', Consulate::count()),
            Stat::make('Graduations', Graduation::count()),
            Stat::make('Events', Event::count()),
        ];
    }

    protected static bool $isLazy = true;

    protected static ?string $pollingInterval = null;
}