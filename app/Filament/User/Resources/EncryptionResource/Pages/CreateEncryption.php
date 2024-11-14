<?php

namespace App\Filament\User\Resources\EncryptionResource\Pages;

use App\Filament\User\Resources\EncryptionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEncryption extends CreateRecord
{
    protected static string $resource = EncryptionResource::class;
}
