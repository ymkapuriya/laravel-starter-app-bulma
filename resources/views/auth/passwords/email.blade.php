@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column"></div>
        <div class="column">
            <div class="box">
                <article>
                    <p class="title has-text-centered">{{ __('Reset Password') }}</p>
                    <div class="divider"></div>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="field">
                            <label class="label">{{ __('E-Mail Address') }}</label>
                            <div class="control has-icons-left">
                                <input name="email" type="email" class="input @error('email') is-danger @enderror"
                                    placeholder="Username" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                            <p class="control">
                                <button type="submit" class="button is-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </p>
                        </div>
                    </form>
                </article>
            </div>
        </div>
        <div class="column"></div>
    </div>
    @if (session('status'))
    <script>
        showMessage("{{ session('status') }}");
    </script>
    @endif
</div>
@endsection