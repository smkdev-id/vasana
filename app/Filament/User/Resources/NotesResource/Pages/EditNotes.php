<?php

namespace App\Filament\User\Resources\NotesResource\Pages;

use App\Filament\User\Resources\NotesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNotes extends EditRecord
{
    protected static string $resource = NotesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
