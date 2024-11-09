<?php

namespace App\Filament\Clusters\Platform\Resources\CodingResource\Pages;

use App\Filament\Clusters\Platform\Resources\CodingResource;
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
