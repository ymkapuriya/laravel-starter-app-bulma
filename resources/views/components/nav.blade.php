<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://www.excellencesolutions.in/" target="_blank">
            <img src="https://www.excellencesolutions.in/images/logo.png" height="28">
        </a>
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
            data-target="main-navbar">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div id="main-navbar" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="{{ url('/') }}">
                <span class="icon">
                    <i class="fas fa-home"></i>
                </span>
            </a>
            @guest
            @else    
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Master Records
                </a>
                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{ route('designations.index') }}">Designations</a>
                </div>
            </div>        
            <a class="navbar-item" href="{{ route('staff_members.index') }}">Staff List</a>
            @endguest            
        </div>
        <div class="navbar-end">
            @guest
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-primary" href="{{ route('login') }}">
                        <strong>{{ __('Login') }}</strong>
                    </a>
                    @if (Route::has('register'))
                    <a class="button is-light" href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>
                    @endif
                </div>
            </div>
            @else
            <div class="navbar-item">
                {{ Auth::user()->name }}
            </div>
            <div class="navbar-item">
                <a class="button is-primary" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <strong>{{ __('Logout') }}</strong>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            @endguest
        </div>
    </div>
</nav>
<script>
    $(document).ready(function() {
        // Check for click events on the navbar burger icon
        $(".navbar-burger").click(function() {
            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
            $(".navbar-burger").toggleClass("is-active");
            $(".navbar-menu").toggleClass("is-active");
        });
    });
</script>