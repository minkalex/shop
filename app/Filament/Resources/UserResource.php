<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use App\Models\UserType;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type_id')
                    ->label('User type')
                    ->required(fn(Model|null $record) => empty($record))
                    ->default(fn(UserType $userType) => $userType::where('title', 'customer')->first()->id)
                    ->options(UserType::all()->pluck('title', 'id')),
                Forms\Components\TextInput::make('lastname')
                    ->required(fn(Model|null $record) => empty($record))
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->required(fn(Model|null $record) => empty($record))
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required(fn(Model|null $record) => empty($record))
                    ->maxLength(255),
                Forms\Components\Toggle::make('active')
                    ->default(1),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required(fn(Model|null $record) => empty($record))
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('type.title')->label('Type')->sortable(),
                Tables\Columns\TextColumn::make('lastname')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
                Tables\Columns\BooleanColumn::make('active')->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
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
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
