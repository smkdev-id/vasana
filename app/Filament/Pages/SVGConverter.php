<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class SVGConverter extends Page
{
    protected static ?string $slug = 'tools/svg-converter';
    protected static string $view = 'filament.pages.svg-converter';
    protected static ?string $title = 'SVG Converter';
    protected static ?string $navigationIcon = 'heroicon-m-cube-transparent';
    protected static ?string $navigationGroup = 'Tools';
}
