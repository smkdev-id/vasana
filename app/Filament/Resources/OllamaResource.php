<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OllamaResource\Pages;
use App\Filament\Resources\OllamaResource\RelationManagers;
use App\Models\Ollama;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OllamaResource extends Resource
{
    protected static ?string $model = Ollama::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
            'index' => Pages\ListOllamas::route('/'),
            'create' => Pages\CreateOllama::route('/create'),
            'edit' => Pages\EditOllama::route('/{record}/edit'),
        ];
    }
}
