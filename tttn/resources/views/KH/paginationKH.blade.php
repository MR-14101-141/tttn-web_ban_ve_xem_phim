@if ($paginator->hasPages())
@if ($paginator->onFirstPage())
<a style="opacity: 0.3;cursor: default;pointer-events: none;" class="pagination__prev">trở về</a>
@else
<a class="pagination__prev" href="{{ $paginator->previousPageUrl() }}">trở về</a>
@endif


@if ($paginator->hasMorePages())
<a class="pagination__next" href="{{ $paginator->nextPageUrl() }}">tiếp theo</a>
@else
<a style="opacity: 0.3;cursor: default;pointer-events: none;" class="pagination__next">tiếp theo</a>
@endif

@endif