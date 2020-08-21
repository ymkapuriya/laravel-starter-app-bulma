@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column"></div>
        <div class="column">
            <div class="box">
                <article>
                    <p class="title has-text-primary has-text-centered">{{ __('Login') }}</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="field">
                            <label class="label">{{ __('E-Mail Address') }}</label>
                            <div class="control has-icons-left">
                                <input name="email" type="email" class="input @error('email') is-danger @enderror"
                                    placeholder="Username">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            @error('email')
                            <p class="help is-danger">
                                <strong>{{ $message }}</strong>
                            </p>
                            @enderror
                        </div>
                        <div class="field">
                            <label class="label">{{ __('Password') }}</label>
                            <div class="control has-icons-left">
                                <input name="password" type="password"
                                    class="input @error('password') is-danger @enderror" placeholder="Password" required
                                    autocomplete="current-password">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-key"></i>
                                </span>
                            </div>
                            @error('password')
                            <p class="help is-danger">
                                <strong>{{ $message }}</strong>
                            </p>
                            @enderror
                        </div>
                        <div class="field">
                            <x-re-captcha></x-re-captcha>
                        </div>
                        <div class="field">
                            <div class="control">
                                <label class="checkbox">
                                    <input type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="field is-grouped">
                            <p class="control">
                                <button type="submit" class="button is-primary">
                                    {{ __('Login') }}
                                </button>
                            </p>
                            <p class="control">
                                @if (Route::has('password.request'))
                                <a class="button is-light" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </p>
                        </div>
                    </form>
                </article>
            </div>
        </div>
        <div class="column"></div>
    </div>
</div>
@endsection