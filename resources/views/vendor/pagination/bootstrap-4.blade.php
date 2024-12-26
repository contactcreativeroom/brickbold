@if ($paginator->hasPages())
     
        <ul class="wg-pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="arrow disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a href="javascript:void(0)" aria-hidden="true"><i class="icon-arrow-left"></i></a>
                </li>
            @else
                <li class="arrow">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="icon-arrow-left"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page">
                                <a href="javascript:void(0)" class="page-link">{{ $page }}</a>
                            </li>
                        @else
                            <li class=""><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="arrow">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="icon-arrow-right"></i></a>
                </li>
            @else
                <li class="arrow disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a href="javascript:void(0)" aria-hidden="true"><i class="icon-arrow-right"></i></a>
                </li>
            @endif
        </ul>
    
@endif
