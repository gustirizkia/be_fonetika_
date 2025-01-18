<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelRekomendasiResource\Pages;
use App\Filament\Resources\ArtikelRekomendasiResource\RelationManagers;
use App\Models\Artikel;
use App\Models\ArtikelUtama;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArtikelRekomendasiResource extends Resource
{
    protected static ?string $model = ArtikelUtama::class;
    protected static ?string $navigationLabel = 'Artikel Rekomendasi'; // Ganti 'Nama Sidebar Baru' dengan nama yang diinginkan

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Artikel';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        $items = ArtikelUtama::where("tipe", "artikel rekomendasi")->get()->pluck("artikel_id");
        return $form
            ->schema([
                Select::make("artikel_id")
                    ->label("Pilih Artikel")
                    ->required()
                    ->options(Artikel::whereNotIn("id", $items)->get()->pluck("nama", "id"))
                    ->searchable()
                    ->relationship("artikel", 'nama'),
                TextInput::make("tipe")->readOnly()
                    ->default('artikel rekomendasi')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
                TextColumn::make("artikel.nama")
                    ->label("Artikel"),
                TextColumn::make("created_at")
                    ->label("Tanggal dibuat")->sortable(),
            ])
            ->modifyQueryUsing(function (Builder $query) {
                return $query->where("tipe", "artikel rekomendasi");
            })
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageArtikelRekomendasis::route('/'),
        ];
    }
}
