<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IndonesiaCitiesResource\Pages;
use App\Filament\Resources\IndonesiaCitiesResource\RelationManagers;
use App\Models\IndonesiaCities;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IndonesiaCitiesResource extends Resource
{
    protected static ?string $model = IndonesiaCities::class;

    protected static ?string $navigationLabel = 'Data Kabupaten/Kota';

    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('province_code')
                    ->required()
                    ->maxLength(2),
                Forms\Components\TextInput::make('code')
                    ->required()
                    ->maxLength(4),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('meta')
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('meta')->searchable(),
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
            'index' => Pages\ListIndonesiaCities::route('/'),
            'create' => Pages\CreateIndonesiaCities::route('/create'),
            'view' => Pages\ViewIndonesiaCities::route('/{record}'),
            'edit' => Pages\EditIndonesiaCities::route('/{record}/edit'),
        ];
    }    
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public function isTableSearchable(): bool
    {
        return true;
    }

    // protected function applySearchToTableQuery(Builder $query): Builder
    // {
    //     if (filled($searchQuery = $this->getTableSearchQuery())) {
    //         $query->whereIn('name', IndonesiaCities::search($searchQuery)->keys());
    //     }
    
    //     return $query;
    // }
}
