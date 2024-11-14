<?php

namespace App\Filament\User\Resources\RegexResource\Pages;

use App\Filament\User\Resources\RegexResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegexes extends ListRecords
{
    protected static string $resource = RegexResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
