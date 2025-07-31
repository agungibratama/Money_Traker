@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="inline-flex space-x-1">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="px-3 py-2 text-sm text-gray-400 bg-gray-100 rounded-full cursor-not-allowed">
                <i class="fas fa-angle-left"></i>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="px-3 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-full hover:bg-indigo-100">
                <i class="fas fa-angle-left"></i>
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="px-3 py-2 text-sm text-gray-400">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-full">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="px-3 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-full hover:bg-indigo-100">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="px-3 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-full hover:bg-indigo-100">
                <i class="fas fa-angle-right"></i>
            </a>
        @else
            <span class="px-3 py-2 text-sm text-gray-400 bg-gray-100 rounded-full cursor-not-allowed">
                <i class="fas fa-angle-right"></i>
            </span>
        @endif
    </nav>
@endif
