<?php

namespace App\Filament\User\Resources\TodoResource\Pages;

use App\Filament\User\Resources\TodoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTodos extends ListRecords
{
    protected static string $resource = TodoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
