<?php

namespace App\Filament\Resources\SupabaseResource\Pages;

use App\Filament\Resources\SupabaseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSupabase extends EditRecord
{
    protected static string $resource = SupabaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
