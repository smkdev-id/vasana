<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class CodeLinter extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $title = 'Code Linter';
    protected static string $view = 'filament.pages.code-linter';
}
