<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelKategoriResource\Pages;
use App\Filament\Resources\ArtikelKategoriResource\RelationManagers;
use App\Models\ArtikelKategori;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArtikelKategoriResource extends Resource
{
    protected static ?string $model = ArtikelKategori::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Artikel';
    protected static ?int $navigationSort = 1;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make("nama")
                            ->required()
                            ->string()
                            ->columnSpan(2)
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("nama")->label("Nama")->searchable(),
                TextColumn::make("created_at")->label("Tanggal Pembuatan")
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListArtikelKategoris::route('/'),
            'create' => Pages\CreateArtikelKategori::route('/create'),
            'edit' => Pages\EditArtikelKategori::route('/{record}/edit'),
        ];
    }
}
