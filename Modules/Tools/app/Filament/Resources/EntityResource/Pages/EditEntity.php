<?php

namespace Modules\Tools\Filament\Resources\EntityResource\Pages;

use Modules\Tools\Filament\Resources\EntityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEntity extends EditRecord
{
    protected static string $resource = EntityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
