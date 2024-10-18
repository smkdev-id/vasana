<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class CSVtoTable extends Page
{
    protected static ?string $slug = 'tools/csv-to-schema';
    protected static string $view = 'filament.pages.csv-to-schema';
    protected static ?string $title = 'CSV-to-Schema Converter';
    protected static ?string $navigationIcon = 'heroicon-s-arrows-right-left';
    protected static ?string $navigationGroup = 'Tools';
}
