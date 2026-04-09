<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.main')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="auth-wrapper">
    <div class="auth-container">
        <h2>Account Login</h2>
        
        @if (session('status'))
            <div style="color: #059669; margin-bottom: 15px; text-align: center; font-weight: bold;">
                {{ session('status') }}
            </div>
        @endif

        <form wire:submit="login">
            <!-- Email Address -->
            <div class="form-group">
                <label for="email">{{ __('Email Address') }}</label>
                <input wire:model="form.email" id="email" class="form-control" type="email" name="email" required autofocus autocomplete="username" />
                @error('form.email') <span class="error-msg">{{ $message }}</span> @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input wire:model="form.password" id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                @error('form.password') <span class="error-msg">{{ $message }}</span> @enderror
            </div>

            <!-- Remember Me -->
            <div class="checkbox-group">
                <input wire:model="form.remember" id="remember" type="checkbox" name="remember">
                <label for="remember" style="margin-bottom: 0; font-weight: normal;">{{ __('Remember me') }}</label>
            </div>

            <div class="form-group" style="margin-top: 30px;">
                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Log in') }}
                </button>
            </div>

            @if (Route::has('password.request'))
                <div style="text-align: center; margin-top: 20px;">
                    <a class="auth-link" href="{{ route('password.request') }}" wire:navigate>
                        {{ __('Forgot your password?') }}
                    </a>
                </div>
            @endif
            
            @if (Route::has('register'))
                <div style="text-align: center; margin-top: 15px; padding-top: 15px; border-top: 1px solid #cbd5e1;">
                    <span style="color: #64748b; font-size: 14px;">Don't have an account?</span> 
                    <a class="auth-link" style="font-weight: bold;" href="{{ route('register') }}" wire:navigate>
                        Register
                    </a>
                </div>
            @endif

        </form>
    </div>
</div>
