<?php

namespace App\Filament\Resources\OllamaResource\Pages;

use App\Filament\Resources\OllamaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOllama extends EditRecord
{
    protected static string $resource = OllamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
