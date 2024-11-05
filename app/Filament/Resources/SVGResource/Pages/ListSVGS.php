<?php

namespace App\Filament\Resources\SVGResource\Pages;

use App\Filament\Resources\SVGResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSVGS extends ListRecords
{
    protected static string $resource = SVGResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
