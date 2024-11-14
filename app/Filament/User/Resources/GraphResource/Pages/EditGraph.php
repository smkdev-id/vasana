<?php

namespace App\Filament\User\Resources\GraphResource\Pages;

use App\Filament\User\Resources\GraphResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGraph extends EditRecord
{
    protected static string $resource = GraphResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
