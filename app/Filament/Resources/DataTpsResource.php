<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DataTpsResource\Pages;
use App\Filament\Resources\DataTpsResource\RelationManagers;
use App\Models\DataTps;
use App\Models\IndonesiaCities;
use App\Models\IndonesiaDistricts;
use App\Models\IndonesiaProvinces;
use App\Models\IndonesiaVilages;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;

class DataTpsResource extends Resource
{
    public $IdProvinsi;

    protected static ?string $model = DataTps::class;

    protected static ?string $navigationLabel = 'Data TPS';

    protected static ?string $navigationIcon = 'heroicon-o-inbox-in';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_tps')
                    ->maxLength(255),
                Select::make('provinsi_id')
                    ->label('Nama Provinsi')
                    ->options(IndonesiaProvinces::all()->take(50)->pluck('name', 'id'))
                    ->searchable()
                    ->reactive()
                    ->afterStateUpdated(fn (callable $set) => $set('kabupaten_kota_id', null)),

                Select::make('kabupaten_kota_id')
                    ->label('Nama Kabupaten / Kota')
                    // ->options(IndonesiaCities::all()->take(50)->pluck('name', 'id'))
                    ->options(function (callable $get) {
                        $provincies = IndonesiaProvinces::find($get('provinsi_id'));
                        if (! $provincies){
                            return IndonesiaCities::all()->pluck('name', 'id');
                        }

                        return $provincies->kota->pluck('name', 'id');
                    })
                    ->searchable()
                    ->reactive()
                    ->afterStateUpdated(fn (callable $set) => $set('kecamatan_id', null)),

                Select::make('kecamatan_id')
                    ->label('Nama Kecamatan')
                    // ->options(IndonesiaDistricts::all()->take(50)->pluck('name', 'id'))
                    ->options(function (callable $get) {
                        $cities = IndonesiaCities::find($get('kabupaten_kota_id'));
                        if (! $cities){
                            return IndonesiaDistricts::all()->pluck('name', 'id');
                        }

                        return $cities->kecamatan->pluck('name', 'id');
                    })
                    ->searchable()
                    ->reactive()
                    ->afterStateUpdated(fn (callable $set) => $set('kelurahan_desa_id', null)),

                Select::make('kelurahan_desa_id')
                    ->label('Nama Kelurahan / Desa')
                    // ->options(IndonesiaVilages::all()->take(50)->pluck('name', 'id'))
                    ->options(function (callable $get) {
                        $districts = IndonesiaDistricts::find($get('kecamatan_id'));
                        if (! $districts){
                            return IndonesiaVilages::all()->pluck('name', 'id');
                        }

                        return $districts->desa->pluck('name', 'id');
                    })
                    ->searchable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('provinsi.provinsi'),
                Tables\Columns\TextColumn::make('nama_tps'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime(),
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
            'index' => Pages\ListDataTps::route('/'),
            'create' => Pages\CreateDataTps::route('/create'),
            'view' => Pages\ViewDataTps::route('/{record}'),
            'edit' => Pages\EditDataTps::route('/{record}/edit'),
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
