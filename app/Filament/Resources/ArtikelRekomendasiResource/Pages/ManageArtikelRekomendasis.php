<?php

namespace App\Filament\Resources\ArtikelRekomendasiResource\Pages;

use App\Filament\Resources\ArtikelRekomendasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageArtikelRekomendasis extends ManageRecords
{
    protected static string $resource = ArtikelRekomendasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
