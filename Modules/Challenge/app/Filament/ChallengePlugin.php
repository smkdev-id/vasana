<?php

namespace Modules\Challenge\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class ChallengePlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Challenge';
    }

    public function getId(): string
    {
        return 'challenge';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
