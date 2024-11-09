<?php

namespace App\Filament\Clusters\Tools\Resources\GistResource\Pages;

use App\Filament\Clusters\Tools\Resources\GistResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGist extends EditRecord
{
    protected static string $resource = GistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
