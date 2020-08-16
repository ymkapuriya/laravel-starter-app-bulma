@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column"></div>
        <div class="column">
            <div class="box">
                <article>
                    <p class="title has-text-primary has-text-centered">{{ __('Verify Your Email Address') }}</p>
                    @if (session('resent'))
                    <script>
                        showMessage("A fresh verification link has been sent to your email address.");
                    </script>
                    @endif
                    <p>
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email, click below to request another') }},
                    </p>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="button is-primary">
                            {{ __('Get Verification Link') }}
                        </button>
                    </form>
                </article>
            </div>
        </div>
        <div class="column"></div>
    </div>
</div>
@endsection