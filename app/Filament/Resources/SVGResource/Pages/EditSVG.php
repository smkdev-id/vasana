<?php

namespace App\Filament\Resources\SVGResource\Pages;

use App\Filament\Resources\SVGResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSVG extends EditRecord
{
    protected static string $resource = SVGResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
