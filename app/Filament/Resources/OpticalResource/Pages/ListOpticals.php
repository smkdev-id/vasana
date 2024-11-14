<?php

namespace App\Filament\Resources\OpticalResource\Pages;

use App\Filament\Resources\OpticalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOpticals extends ListRecords
{
    protected static string $resource = OpticalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
