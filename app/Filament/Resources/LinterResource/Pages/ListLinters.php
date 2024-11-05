<?php

namespace App\Filament\Resources\LinterResource\Pages;

use App\Filament\Resources\LinterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLinters extends ListRecords
{
    protected static string $resource = LinterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
