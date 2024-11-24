<?php

namespace Modules\Tools\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class ToolsPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Tools';
    }

    public function getId(): string
    {
        return 'tools';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
