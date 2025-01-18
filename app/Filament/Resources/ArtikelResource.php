<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Filament\Resources\ArtikelResource\RelationManagers;
use App\Models\Artikel;
use App\Models\ArtikelKategori;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        FileUpload::make("image")
                            ->required()
                            ->image()
                            ->columnSpan(2),
                        TextInput::make("nama")
                            ->label("Nama")
                            ->disabled()
                            ->readOnly(),
                        Select::make("kategori_id")
                            ->label("Kategori")
                            ->required()
                            ->options(ArtikelKategori::all()->pluck("nama", "id"))
                            ->searchable()
                            ->relationship("kategori", 'nama')
                            ->createOptionForm([
                                TextInput::make("nama")
                                    ->required()
                                    ->string()
                            ]),

                        TextInput::make("keyword")
                            ->required()
                            ->string()
                            ->readOnly()
                            ->disabled()
                            ->columnSpan(2),

                        RichEditor::make('content')
                            ->required()
                            ->toolbarButtons([
                                // 'attachFiles',
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])
                            ->columnSpan(2),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("created_at")
                    ->sortable()
                    ->label("Tanggal Pembuatan"),
                TextColumn::make("nama")
                    ->label("Judul")
                    ->searchable(),
                TextColumn::make("kategori.nama")
                    ->label("Kategori"),
                TextColumn::make("user.name")
                    ->label("Penulis"),
                TextColumn::make("is_publish")
                    ->label("Status")
                    ->formatStateUsing(function ($state) {
                        switch ($state) {
                            case 1:
                                return 'Publish';
                            case 0:
                                return 'Draft';
                            case 3:
                                return 'Ditolak';
                            default:
                                return 'Tidak Diketahui';
                        }
                    }),
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
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}
