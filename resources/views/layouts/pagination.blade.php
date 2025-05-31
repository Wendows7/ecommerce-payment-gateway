@if ($paginator->hasPages())
    <div class="pagination-area mt-40 mb-70">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link prev" href="#" tabindex="-1"><i class="fal fa-angle-left"></i> Prev</a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link prev" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fal fa-angle-left"></i> Prev</a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled"><a class="page-link" href="#">{{ $element }}</a></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link next" href="{{ $paginator->nextPageUrl() }}" rel="next">Next <i class="fal fa-angle-right"></i></a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <a class="page-link next" href="#">Next <i class="fal fa-angle-right"></i></a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endif
