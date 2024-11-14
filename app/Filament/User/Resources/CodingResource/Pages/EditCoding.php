<?php

namespace App\Filament\User\Resources\CodingResource\Pages;

use App\Filament\User\Resources\CodingResource;
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
