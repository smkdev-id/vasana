<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class RegexReader extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $title = 'Regex Reader';
    protected static string $view = 'filament.pages.regex-reader';
}
