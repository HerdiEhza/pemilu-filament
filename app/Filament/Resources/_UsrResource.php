<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\DataTps;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class _UsrResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('tps_id')
                    ->label('Penempatan TPS')
                    ->options(DataTps::all()->pluck('nama_tps', 'id'))
                    ->searchable(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('profile_photo_path')
                    ->maxLength(2048),
                Forms\Components\TextInput::make('locale')
                    ->maxLength(255),
                Forms\Components\TextInput::make('akun_google')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nomor_hp')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nomor_ktp')
                    ->maxLength(255),
                    Forms\Components\Textarea::make('alamat'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('author.tps_id'),
                TextColumn::make('name'),
                TextColumn::make('email'),
                // TextColumn::make('email_verified_at')
                //     ->dateTime(),
                // TextColumn::make('profile_photo_path'),
                // TextColumn::make('locale'),
                TextColumn::make('akun_google'),
                TextColumn::make('alamat'),
                TextColumn::make('nomor_hp'),
                TextColumn::make('nomor_ktp'),
                // TextColumn::make('created_at')
                //     ->dateTime(),
                // TextColumn::make('updated_at')
                //     ->dateTime(),
                // TextColumn::make('deleted_at')
                //     ->dateTime(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
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
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
