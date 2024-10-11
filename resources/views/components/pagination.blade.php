<nav class="flex items-center justify-center pt-4">
    <ul class="inline-flex -space-x-px text-base h-10">
        {{-- Enlace de "Anterior" --}}
        <li>
            @if ($paginator->onFirstPage())
                <span class="flex items-center justify-center px-4 h-10 text-gray-500 bg-white border border-gray-300 rounded-s-lg cursor-default" aria-disabled="true">Previous</span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="flex items-center justify-center px-4 h-10 text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
            @endif
        </li>
        {{-- Enlaces de números --}}
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <li>
                @if ($i == $paginator->currentPage())
                    <span class="flex items-center justify-center px-4 h-10 text-blue-600 border border-gray-300 bg-blue-50">{{ $i }}</span>
                @else
                    <a href="{{ $paginator->url($i) }}" class="flex items-center justify-center px-4 h-10 text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">{{ $i }}</a>
                @endif
            </li>
        @endfor
        {{-- Enlace de "Siguiente" --}}
        <li>
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="flex items-center justify-center px-4 h-10 text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
            @else
                <span class="flex items-center justify-center px-4 h-10 text-gray-500 bg-white border border-gray-300 rounded-e-lg cursor-default" aria-disabled="true">Next</span>
            @endif
        </li>
    </ul>
</nav>
