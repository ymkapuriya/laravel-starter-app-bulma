@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column"></div>
        <div class="column">
            <div class="box">
                <article>
                    <p class="title has-text-centered">Register</p>
                    <div class="divider"></div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="field">
                            <label class="label">{{ __('Name of User') }}</label>
                            <div class="control has-icons-left">
                                <input name="name" type="text" value="{{ old('name') }}"
                                    class="input @error('name') is-danger @enderror" placeholder="Name of user" required
                                    autocomplete="name" autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            @error('name')
                            <p class="help is-danger">
                                <strong>{{ $message }}</strong>
                            </p>
                            @enderror
                        </div>
                        <div class="field">
                            <label class="label">{{ __('E-Mail Address') }}</label>
                            <div class="control has-icons-left">
                                <input name="email" type="email" class="input @error('email') is-danger @enderror"
                                    placeholder="Username" value="{{ old('email') }}" required autocomplete="email">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-at"></i>
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
                                    autocomplete="new-password">
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
                            <label class="label">{{ __('Confirm Password') }}</label>
                            <div class="control has-icons-left">
                                <input id="password-confirm" type="password" class="input" name="password_confirmation"
                                    required autocomplete="new-password">
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
                            <p class="control">
                                <button type="submit" class="button is-primary">
                                    {{ __('Register') }}
                                </button>
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