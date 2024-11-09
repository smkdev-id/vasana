<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GistResource\Pages;
use App\Filament\Resources\GistResource\RelationManagers;
use App\Models\Gist;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

// TODO: Gist Immitation
class GistResource extends Resource
{
    protected static ?string $model = Gist::class;
    protected static ?string $navigationIcon = 'heroicon-o-code-bracket';

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
            'index' => Pages\ListGists::route('/'),
            'create' => Pages\CreateGist::route('/create'),
            'edit' => Pages\EditGist::route('/{record}/edit'),
        ];
    }
}
