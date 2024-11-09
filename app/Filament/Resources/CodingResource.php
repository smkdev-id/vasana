<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CodingResource\Pages;
use App\Filament\Resources\CodingResource\RelationManagers;
use App\Models\Coding;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

// TODO: Coding Challenge Resource
class CodingResource extends Resource
{
    protected static ?string $model = Coding::class;
    protected static ?string $navigationIcon = 'heroicon-o-square-3-stack-3d';

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
            'index' => Pages\ListCodings::route('/'),
            'create' => Pages\CreateCoding::route('/create'),
            'edit' => Pages\EditCoding::route('/{record}/edit'),
        ];
    }
}
