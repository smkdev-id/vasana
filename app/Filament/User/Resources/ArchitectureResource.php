<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\ArchitectureResource\Pages;
use App\Filament\User\Resources\ArchitectureResource\RelationManagers;
use App\Models\Architecture;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArchitectureResource extends Resource
{
    protected static ?string $model = Architecture::class;

    protected static ?string $navigationIcon = 'heroicon-s-adjustments-horizontal';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArchitectures::route('/'),
            'create' => Pages\CreateArchitecture::route('/create'),
            'edit' => Pages\EditArchitecture::route('/{record}/edit'),
        ];
    }
//    public static function getNavigationLabel(): string
//    {
//        return 'Pendaftar';
//    }
}
