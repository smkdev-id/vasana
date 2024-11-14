<?php

namespace App\Filament\Resources\RetrievalResource\Pages;

use App\Filament\Resources\RetrievalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRetrievals extends ListRecords
{
    protected static string $resource = RetrievalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
