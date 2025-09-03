@if ($paginator->hasPages())
    <nav class="pagination-wrapper my-4">
        <ul class="pagination flex justify-center gap-2">

            {{-- Previous --}}
            <li>
                <a href="{{ $paginator->onFirstPage() ? '#' : $paginator->previousPageUrl() }}" 
                   class="prev {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                    <img src="/images/double-arrow.png">
                </a>
            </li>
            @php
                $current = $paginator->currentPage();
                $last = $paginator->lastPage();
            @endphp

            @if ($current < $last)
                <li class="number_list_pag">{{ $current }}</li>
                {{-- Next number --}}
                @if ($current + 1 <= $last)
                    <li class="number_list_pag_link">
                        <a href="{{ $paginator->url($current + 1) }}">{{ $current + 1 }}</a>
                    </li>
                @endif
                @if ($current + 1 < $last)
                    <li class="flex_end">
                        <div>.</div>
                        <div>.</div>
                        <div>.</div>
                    </li>
                @endif
                <li class="number_list_pag_link">
                    <a href="{{ $paginator->url($last) }}">{{ $last }}</a>
                </li>
            @else
                <li class="number_list_pag">{{ $last }}</li>
            @endif

            {{-- Next --}}
            <li>
                <a href="{{ $paginator->hasMorePages() ? $paginator->nextPageUrl() : '#' }}" 
                   class="next {{ !$paginator->hasMorePages() ? 'disabled' : '' }}">
                    <img src="/images/double-arrow.png">
                </a>
            </li>

        </ul>
    </nav>
@endif
