<?php

namespace App\Filament\User\Resources\NotesResource\Pages;

use App\Filament\User\Resources\NotesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNotes extends CreateRecord
{
    protected static string $resource = NotesResource::class;
}
