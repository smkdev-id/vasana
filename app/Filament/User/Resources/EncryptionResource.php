<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\EncryptionResource\Pages;
use App\Filament\User\Resources\EncryptionResource\RelationManagers;
use App\Models\Encryption;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EncryptionResource extends Resource
{
    protected static ?string $model = Encryption::class;

    protected static ?string $navigationIcon = 'heroicon-m-finger-print';

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
            'index' => Pages\ListEncryptions::route('/'),
            'create' => Pages\CreateEncryption::route('/create'),
            'edit' => Pages\EditEncryption::route('/{record}/edit'),
        ];
    }
}
