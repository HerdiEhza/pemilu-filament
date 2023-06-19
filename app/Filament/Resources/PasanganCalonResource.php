<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PasanganCalonResource\Pages;
use App\Filament\Resources\PasanganCalonResource\RelationManagers;
use App\Models\DataPartai;
use App\Models\KategoriPemilu;
use App\Models\PasanganCalon;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Forms\Components\Select;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class PasanganCalonResource extends Resource
{
    protected static ?string $model = PasanganCalon::class;

    protected static ?string $navigationLabel = 'Data Bakal Calon';

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_pasangan_calon')->required(),
                Select::make('kategori_pemilu_id')
                    ->label('Kategori PEMILU')
                    ->options(KategoriPemilu::all()->pluck('nama_kategori_pemilu', 'id'))
                    ->searchable(),
                Select::make('data_partai_id')
                    ->label('Partai Pengusung')
                    ->multiple()
                    ->options(DataPartai::all()->pluck('nama_partai', 'id'))
                    ->searchable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_pasangan_calon')->label('Nama Pasangan Calon'),
                TextColumn::make('kategoriPemilu.nama_kategori_pemilu')
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
            'index' => Pages\ListPasanganCalons::route('/'),
            'create' => Pages\CreatePasanganCalon::route('/create'),
            'view' => Pages\ViewPasanganCalon::route('/{record}'),
            'edit' => Pages\EditPasanganCalon::route('/{record}/edit'),
            // 'test' => PasanganCalonResource::getPages()
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
