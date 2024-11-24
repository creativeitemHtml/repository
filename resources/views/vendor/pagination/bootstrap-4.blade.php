@if ($paginator->hasPages())
    <nav>
        <ul class="pagination ci-pagination ci-pagination-1">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            <li class="page-item">
                <a class="page-link previous disabled" aria-disabled="true" aria-label="Previous"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="12" viewBox="0 0 8.414 14.828">
                        <path id="Path_460" data-name="Path 460" d="M15,6,9,12l6,6" transform="translate(-8 -4.586)" fill="none" stroke="#797c8b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </svg>
                </a>
            </li>
            @else
            <li class="page-item">
                <a class="page-link previous" href="{{ $paginator->previousPageUrl() }}"  aria-label="Previous"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="12" viewBox="0 0 8.414 14.828" >
                        <path id="Path_460" data-name="Path 460" d="M15,6,9,12l6,6" transform="translate(-8 -4.586)" fill="none" stroke="#797c8b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </a>
            </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link active ">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link next" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="12" viewBox="0 0 8.414 14.828" >
                        <path id="Path_462" data-name="Path 462" d="M9,6l6,6L9,18" transform="translate(-7.586 -4.586)" fill="none" stroke="#797c8b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </a>
            </li>
            @else
            <li class="page-item">
                <a class="page-link next disabled" aria-disabled="true" rel="next" aria-label="Next"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="12" viewBox="0 0 8.414 14.828" >
                        <path id="Path_462" data-name="Path 462" d="M9,6l6,6L9,18" transform="translate(-7.586 -4.586)" fill="none" stroke="#797c8b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </svg>
                </a>
            </li>
            @endif
        </ul>
    </nav>
@endif
