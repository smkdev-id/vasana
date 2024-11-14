<?php

namespace App\Filament\User\Resources\NotesResource\Pages;

use App\Filament\User\Resources\NotesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNotes extends ListRecords
{
    protected static string $resource = NotesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
