<?php

namespace App\Filament\User\Resources\SalaryResource\Pages;

use App\Filament\User\Resources\SalaryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSalary extends EditRecord
{
    protected static string $resource = SalaryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
