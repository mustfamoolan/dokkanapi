<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    public $phone;
    public $password;
    public $remember = false;

    protected $rules = [
        'phone' => 'required',
        'password' => 'required',
    ];

    #[Layout('components.guest-layout')]
    #[Title('Login - Dokkan Admin')]
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['phone' => $this->phone, 'password' => $this->password], $this->remember)) {
            session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        $this->addError('phone', 'بيانات الدخول غير صحيحة.');
    }
}
