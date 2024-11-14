<?php

namespace App\Filament\Resources\SupabaseResource\Pages;

use App\Filament\Resources\SupabaseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSupabases extends ListRecords
{
    protected static string $resource = SupabaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
