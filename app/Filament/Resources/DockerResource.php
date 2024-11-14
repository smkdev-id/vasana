<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DockerResource\Pages;
use App\Filament\Resources\DockerResource\RelationManagers;
use App\Models\Docker;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DockerResource extends Resource
{
    protected static ?string $model = Docker::class;

    protected static ?string $navigationIcon = 'heroicon-s-cube-transparent';

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
            'index' => Pages\ListDockers::route('/'),
            'create' => Pages\CreateDocker::route('/create'),
            'edit' => Pages\EditDocker::route('/{record}/edit'),
        ];
    }
}
