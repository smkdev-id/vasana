<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\GraphResource\Pages;
use App\Filament\User\Resources\GraphResource\RelationManagers;
use App\Models\Graph;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

// TODO: GraphQL Visualizer
class GraphResource extends Resource
{
    protected static ?string $model = Graph::class;

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
            'index' => Pages\ListGraphs::route('/'),
            'create' => Pages\CreateGraph::route('/create'),
            'edit' => Pages\EditGraph::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'GraphQL Visualizer';
    }
}
