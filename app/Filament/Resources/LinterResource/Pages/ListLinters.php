<?php

namespace App\Filament\Clusters\Tools\Resources\LinterResource\Pages;

use App\Filament\Clusters\Tools\Resources\LinterResource;
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
