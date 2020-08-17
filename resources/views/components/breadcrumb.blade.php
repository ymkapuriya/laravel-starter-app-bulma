<nav class="breadcrumb has-bullet-separator mt-2 mb-2" aria-label="breadcrumbs">
    <ul>
        <li>
            <a href="{{ url('/') }}" class="is-capitalized">Home</a>
        </li>
        @foreach ($links as $label => $route)
            @if ($loop->last)
                <li class="is-active">
                    <a href="#" class="is-capitalized" area-current="page">{{ $label }}</a>
                </li>
            @else
                <li>
                    @if ($route)
                    <a href="{{ route($route) }}" class="is-capitalized">{{ $label }}</a>
                    @else    
                    <a href="#" class="is-capitalized">{{ $label }}</a>
                    @endif                    
                </li>
            @endif
        @endforeach
    </ul>
</nav>