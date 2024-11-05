<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class ArchitectureDiagram extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';
    protected static ?string $title = 'Architecture Diagram';
    protected static string $view = 'filament.pages.architecture-diagram';
    protected static ?string $navigationGroup = 'Tools';
}
