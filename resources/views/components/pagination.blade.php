@if ($paginator->hasPages())
    <nav class="pagination-wrapper my-4">
        <ul class="pagination flex justify-center gap-2">

            {{-- Previous --}}
            <li>
                <a href="{{ $paginator->previousPageUrl() ?? '#' }}" class="prev">
                    <img src="/images/double-arrow.png">
                </a>
            </li>

            {{-- Page Numbers --}}
            @for ($page = 1; $page <= $paginator->lastPage(); $page++)
                @if ($page == $paginator->currentPage())
                    <li class="number_list_pag">{{ $page }}</li>
                @else
                    <li class="number_list_pag_link">
                        <a href="{{ $paginator->url($page) }}">{{ $page }}</a>
                    </li>
                @endif
            @endfor

            {{-- Next --}}
            <li>
                <a href="{{ $paginator->nextPageUrl() ?? '#' }}" class="next">
                    <img src="/images/double-arrow.png">
                </a>
            </li>

        </ul>
    </nav>
@endif
