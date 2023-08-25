<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class AccountWidget extends Widget
{
    protected static ?int $sort = -3;

    /**
     * @var view-string
     */
    protected static string $view = 'filament-panels::widgets.account-widget';

    protected static bool $isLazy = true;

    /**
    * @var int | string | array<string, int | null>
    */
    protected int | string | array $columnSpan = 2;
}
