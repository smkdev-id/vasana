<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class ComposeGenerator extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $title = 'Compose Generator';
    protected static string $view = 'filament.pages.compose-generator';
}
