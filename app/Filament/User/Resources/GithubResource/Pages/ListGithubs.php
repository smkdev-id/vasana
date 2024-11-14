<?php

namespace App\Filament\User\Resources\GithubResource\Pages;

use App\Filament\User\Resources\GithubResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGithubs extends ListRecords
{
    protected static string $resource = GithubResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
