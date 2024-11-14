<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RetrievalResource\Pages;
use App\Filament\Resources\RetrievalResource\RelationManagers;
use App\Models\Retrieval;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

// TODO: Own RAG Tools
class RetrievalResource extends Resource
{
    protected static ?string $model = Retrieval::class;

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
            'index' => Pages\ListRetrievals::route('/'),
            'create' => Pages\CreateRetrieval::route('/create'),
            'edit' => Pages\EditRetrieval::route('/{record}/edit'),
        ];
    }
}
