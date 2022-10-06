<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Hash;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (null === $data['type_id'])
            unset($data['type_id']);

        if (null === $data['password'])
            unset($data['password']);
        else
            $data['password'] = Hash::make($data['password']);

        $data['active'] = (int)$data['active'];

        return $data;
    }
}
