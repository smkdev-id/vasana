<?php

namespace App\Filament\Clusters\Tools\Resources;

use App\Filament\Resources\GistResource\Pages;
use App\Filament\Resources\GistResource\RelationManagers;
use App\Models\Gist;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class GistResource extends Resource
{
    protected static ?string $model = Gist::class;
    protected static ?string $navigationIcon = 'heroicon-o-code-bracket';
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
            'index' => \App\Filament\Clusters\Tools\Resources\GistResource\Pages\ListGists::route('/'),
            'create' => \App\Filament\Clusters\Tools\Resources\GistResource\Pages\CreateGist::route('/create'),
            'edit' => \App\Filament\Clusters\Tools\Resources\GistResource\Pages\EditGist::route('/{record}/edit'),
        ];
    }
}
