<?php

namespace App\Filament\Clusters\Platform\Resources;

use App\Filament\Resources\CodingResource\Pages;
use App\Filament\Resources\CodingResource\RelationManagers;
use App\Models\Coding;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CodingResource extends Resource
{
    protected static ?string $model = Coding::class;
    protected static ?string $navigationIcon = 'heroicon-o-square-3-stack-3d';
    protected static ?string $navigationGroup = 'Platform';

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
            'index' => \App\Filament\Clusters\Platform\Resources\CodingResource\Pages\ListCodings::route('/'),
            'create' => \App\Filament\Clusters\Platform\Resources\CodingResource\Pages\CreateCoding::route('/create'),
            'edit' => \App\Filament\Clusters\Platform\Resources\CodingResource\Pages\EditCoding::route('/{record}/edit'),
        ];
    }
}
