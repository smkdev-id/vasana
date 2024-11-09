<?php

namespace App\Filament\Resources\LinterResource\Pages;

use App\Filament\Resources\LinterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLinter extends EditRecord
{
    protected static string $resource = LinterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
