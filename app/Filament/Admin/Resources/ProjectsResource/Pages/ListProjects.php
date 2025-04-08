<?php

namespace App\Filament\Admin\Resources\ProjectsResource\Pages;

use App\Filament\Admin\Resources\ProjectsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjects extends ListRecords
{
    protected static string $resource = ProjectsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
