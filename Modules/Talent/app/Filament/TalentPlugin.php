<?php

namespace Modules\Talent\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class TalentPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Talent';
    }

    public function getId(): string
    {
        return 'talent';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
