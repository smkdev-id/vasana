<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class EncryptorDecryptor extends Page
{
    protected static ?string $slug = 'tools/encryptor-decryptor';
    protected static string $view = 'filament.pages.encryptor-decryptor';
    protected static ?string $title = 'Encryptor & Decryptor';
    protected static ?string $navigationIcon = 'heroicon-c-hashtag';
    protected static ?string $navigationGroup = 'Tools';
}
