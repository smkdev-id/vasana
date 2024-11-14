<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SupabaseResource\Pages;
use App\Filament\Resources\SupabaseResource\RelationManagers;
use App\Models\Supabase;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SupabaseResource extends Resource
{
    protected static ?string $model = Supabase::class;

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
            'index' => Pages\ListSupabases::route('/'),
            'create' => Pages\CreateSupabase::route('/create'),
            'edit' => Pages\EditSupabase::route('/{record}/edit'),
        ];
    }
}
