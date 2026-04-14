<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Auth\Pages\Login as BaseLogin;
use Illuminate\Validation\ValidationException;

class Login extends BaseLogin
{
    protected function getEmailFormComponent(): Component
    {
        return parent::getEmailFormComponent()
            ->label('رقم الهاتف')
            ->tel()
            ->autocomplete('tel');
    }

    protected function getCredentialsFromFormData(array $data): array
    {
        return [
            'phone' => $data['email'],
            'password' => $data['password'],
        ];
    }
}
