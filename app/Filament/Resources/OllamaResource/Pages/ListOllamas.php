<?php

namespace App\Filament\Resources\OllamaResource\Pages;

use App\Filament\Resources\OllamaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOllamas extends ListRecords
{
    protected static string $resource = OllamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
