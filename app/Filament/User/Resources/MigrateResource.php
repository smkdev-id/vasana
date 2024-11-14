<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\MigrateResource\Pages;
use App\Filament\User\Resources\MigrateResource\RelationManagers;
use App\Models\Migrate;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

// TODO: Laravel Code Migration
class MigrateResource extends Resource
{
    protected static ?string $model = Migrate::class;
    protected static ?string $navigationIcon = 'heroicon-s-chevron-double-down';
    
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
            'index' => Pages\ListMigrates::route('/'),
            'create' => Pages\CreateMigrate::route('/create'),
            'edit' => Pages\EditMigrate::route('/{record}/edit'),
        ];
    }
}
