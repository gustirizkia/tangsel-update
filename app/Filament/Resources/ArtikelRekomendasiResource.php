<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelRekomendasiResource\Pages;
use App\Filament\Resources\ArtikelRekomendasiResource\RelationManagers;
use App\Models\Artikel;
use App\Models\ArtikelRekomendasi;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArtikelRekomendasiResource extends Resource
{
    protected static ?string $model = ArtikelRekomendasi::class;

    protected static ?string $navigationGroup = 'Artikel';
    protected static ?string $navigationLabel = 'Artikel Rekomendasi';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $ArtikelRekomendasi = ArtikelRekomendasi::get()->pluck("artikel_id");
        return $form
            ->schema([
                Select::make('artikel_id')
                    ->label('Artikel')
                    ->required()
                    ->options(Artikel::whereNotIn("id", $ArtikelRekomendasi)->get()->pluck("nama", "id"))
                    ->searchable()
                    ->columnSpan(2),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("artikel.nama")->label("Artikel"),
            ])
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
