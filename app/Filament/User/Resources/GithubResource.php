<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\GithubResource\Pages;
use App\Filament\user\Resources\GithubResource\RelationManagers;
use App\Models\Github;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

// TODO: Github Action Best Practice
class GithubResource extends Resource
{
    protected static ?string $model = Github::class;
    protected static ?string $navigationIcon = 'heroicon-s-beaker';
//    protected static ?string $cluster = Tools::class;
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
            'index' => Pages\ListGithubs::route('/'),
            'create' => Pages\CreateGithub::route('/create'),
            'edit' => Pages\EditGithub::route('/{record}/edit'),
        ];
    }
}
