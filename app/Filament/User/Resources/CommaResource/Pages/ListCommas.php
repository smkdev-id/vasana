<?php

namespace App\Filament\User\Resources\CommaResource\Pages;

use App\Filament\User\Resources\CommaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCommas extends ListRecords
{
    protected static string $resource = CommaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
