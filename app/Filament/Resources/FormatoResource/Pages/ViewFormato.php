<?php

namespace App\Filament\Resources\FormatoResource\Pages;

use App\Filament\Resources\FormatoResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFormato extends ViewRecord
{
    protected static string $resource = FormatoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
