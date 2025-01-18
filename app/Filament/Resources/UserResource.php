<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Akun User';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('name')->label("Nama")
                            ->required()
                            ->string(),
                        TextInput::make('email')->label("Email")
                            ->required()
                            ->unique("users", "email")
                            ->email(),

                        TextInput::make('phone')->label("Phone")
                            ->required()
                            ->unique("users", "phone"),
                        Select::make("roles")
                            ->options([
                                "user" => "User/Penulis",
                                "admin" => "Admin",
                            ])
                            ->required(),
                        TextInput::make('password')->label("Password")
                            ->required()
                            ->password(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("name")->label('Nama')
                    ->searchable(),
                TextColumn::make("email")->label('Email')
                    ->searchable(),
                TextColumn::make("phone")->label('Phone')
                    ->searchable(),
                TextColumn::make("roles")->label('Roles')
                    ->searchable(),
                TextColumn::make("created_at")->label('Tanggal Join')->sortable(),
            ])

            ->filters([
                SelectFilter::make('roles')
                    ->label('Roles')
                    ->options([
                        'admin' => 'Admin',
                        'user' => 'User/Penulis',
                    ])
                    ->query(function (Builder $query, array $data) {
                        if ($data['value'] === 'admin') {
                            $query->where('roles', 'admin');
                        } elseif ($data['value'] === 'user') {
                            $query->where('roles', 'user');
                        }
                    }),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
