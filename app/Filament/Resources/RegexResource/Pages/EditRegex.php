<?php

namespace App\Filament\Resources\RegexResource\Pages;

use App\Filament\Resources\RegexResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegex extends EditRecord
{
    protected static string $resource = RegexResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
