<?php

namespace App\Filament\Resources\GistResource\Pages;

use App\Filament\Resources\GistResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGist extends CreateRecord
{
    protected static string $resource = GistResource::class;
}
