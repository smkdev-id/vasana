<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\RegexResource\Pages;
use App\Filament\User\Resources\RegexResource\RelationManagers;
use App\Models\Regex;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

// TODO: Regex Reader
class RegexResource extends Resource
{
    protected static ?string $model = Regex::class;
    protected static ?string $navigationIcon = 'heroicon-s-arrow-path-rounded-square';
    protected static ?string $navigationGroup = 'Engineering';

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
            'index' => Pages\ListRegexes::route('/'),
            'create' => Pages\CreateRegex::route('/create'),
            'edit' => Pages\EditRegex::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Regex Reader';
    }
}
