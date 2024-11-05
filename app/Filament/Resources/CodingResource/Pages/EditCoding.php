<?php

namespace App\Filament\Resources\CodingResource\Pages;

use App\Filament\Resources\CodingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCoding extends EditRecord
{
    protected static string $resource = CodingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
