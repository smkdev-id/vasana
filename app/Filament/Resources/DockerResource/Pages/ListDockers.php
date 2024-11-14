<?php

namespace App\Filament\Resources\DockerResource\Pages;

use App\Filament\Resources\DockerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDockers extends ListRecords
{
    protected static string $resource = DockerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
