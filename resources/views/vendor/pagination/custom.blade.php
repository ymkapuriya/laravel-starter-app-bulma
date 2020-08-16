@if ($paginator->hasPages())
<nav class="pagination" role="navigation" aria-label="pagination">
    @if ($paginator->onFirstPage())
    <a class="pagination-previous button" disabled aria-label="@lang('pagination.previous')">
        <i class="fas fa-backward"></i>
    </a>    
    @else
    <a class="pagination-previous button is-primary" href="{{ $paginator->previousPageUrl() }}" rel="prev"
        aria-label="@lang('pagination.previous')">
        <i class="fas fa-backward"></i>
    </a>    
    @endif
    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <a class="pagination-previous button is-primary" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
        <i class="fas fa-forward"></i>
    </a>
    @else
    <a class="pagination-previous button" disabled aria-label="@lang('pagination.next')">
        <i class="fas fa-forward"></i>
    </a>
    @endif
    <ul class="pagination-list">        
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li>
                    <span class="pagination-ellipsis">&hellip;</span>
                </li>                
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <li>
                        <a class="pagination-link is-current" aria-current="page">
                            <span>{{ $page }}</span>
                        </a>
                    </li>
                    @else
                        <li>
                            <a class="pagination-link" href="{{ $url }}">
                                {{ $page }}
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach        
    </ul>
</nav>
@endif