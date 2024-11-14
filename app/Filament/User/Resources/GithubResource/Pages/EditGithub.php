<?php

namespace App\Filament\User\Resources\GithubResource\Pages;

use App\Filament\User\Resources\GithubResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGithub extends EditRecord
{
    protected static string $resource = GithubResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
