<?php

namespace App\Filament\User\Resources\TodoResource\Pages;

use App\Filament\User\Resources\TodoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTodo extends CreateRecord
{
    protected static string $resource = TodoResource::class;
}
