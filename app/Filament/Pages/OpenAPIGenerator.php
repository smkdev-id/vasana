<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class OpenAPIGenerator extends Page
{
    protected static ?string $slug = 'tools/openapi-generator';
    protected static string $view = 'filament.pages.openapi-generator';
    protected static ?string $title = 'OpenAPI Generator';
    protected static ?string $navigationIcon = 'heroicon-c-document-text';
    protected static ?string $navigationGroup = 'More';
}
