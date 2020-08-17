<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/e272688bb1.js" crossorigin="anonymous"></script>
    <script src="{{ mix('/js/plugins.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- Bulma plugins -->
    {{-- <script src="{{ asset('js/bulma-toast.min.js') }}"></script> --}}

    <!-- Styles -->
    <link href="{{ mix('css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>

    <header>
        @include('components.nav')
    </header>

    <main>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif        
        <section class="section pt-1 pb-1">       
            @if (isset($breadcrumbs))     
                <x-breadcrumb :links="$breadcrumbs"></x-breadcrumb>
                <div class="divider mt-0 mb-0"></div>    
            @endif                    
        </section>        
        <section class="section pt-4">
            @yield('content')
        </section>
    </main>

    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>Laravel - Bulma Starter App </strong> by
                <a class="has-text-info" href="https://www.excellencesolutions.in/">Excellence Solutions</a>.
                <br />
                The source code is licensed <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
            </p>
        </div>
    </footer>

    <script type="application/javascript">
        $(document).ready(function(){
            init();
        });
    </script>
    @include('components.notifications')
</body>

</html>