<?php

namespace App\Filament\Resources\FormatoResource\Pages;

use App\Filament\Resources\FormatoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFormato extends EditRecord
{
    protected static string $resource = FormatoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
