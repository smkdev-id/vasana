<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\LinterResource\Pages;
use App\Filament\User\Resources\LinterResource\RelationManagers;
use App\Models\Linter;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;


// TODO: Code Linter
class LinterResource extends Resource
{
    protected static ?string $model = Linter::class;
    protected static ?string $navigationIcon = 'heroicon-c-sparkles';

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
            'index' => Pages\ListLinters::route('/'),
            'create' => Pages\CreateLinter::route('/create'),
            'edit' => Pages\EditLinter::route('/{record}/edit'),
        ];
    }
}
