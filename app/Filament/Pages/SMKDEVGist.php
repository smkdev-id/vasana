<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class SMKDEVGist extends Page
{
    protected static ?string $slug = 'tools/smkdev-gist';
    protected static string $view = 'filament.pages.smkdev-gist';
    protected static ?string $title = 'SMKDEV Gist';
    protected static ?string $navigationIcon = 'heroicon-o-code-bracket';
    protected static ?string $navigationGroup = 'Tools';
}
