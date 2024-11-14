<?php

namespace App\Filament\User\Resources\EncryptionResource\Pages;

use App\Filament\User\Resources\EncryptionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEncryption extends EditRecord
{
    protected static string $resource = EncryptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
