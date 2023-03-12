@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link cmn-btn text-white" style="border:none;font-size:18px;border-radius:0px">@lang('pagination.previous')</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link cmn-btn text-white" style="border:none;font-size:18px;border-radius:0px" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link cmn-btn text-white" style="border:none;font-size:18px;border-radius:0px" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link cmn-btn text-white" style="border:none;font-size:18px;border-radius:0px">@lang('pagination.next')</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
