<?php

namespace App\Filament\Clusters\Tools\Resources;

use App\Filament\Clusters\Tools\Resources;
use App\Filament\Resources\LinterResource\Pages;
use App\Filament\Resources\LinterResource\RelationManagers;
use App\Models\Linter;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class LinterResource extends Resource
{
    protected static ?string $model = Linter::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Tools';

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
            'index' => Resources\LinterResource\Pages\ListLinters::route('/'),
            'create' => Resources\LinterResource\Pages\CreateLinter::route('/create'),
            'edit' => Resources\LinterResource\Pages\EditLinter::route('/{record}/edit'),
        ];
    }
}
