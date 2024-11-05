<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class ComposeGenerator extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $title = 'Compose Generator';
    protected static string $view = 'filament.pages.compose-generator';
    protected static ?string $navigationGroup = 'Tools';
}
