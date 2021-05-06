@if ($paginator->hasPages())
@if ($paginator->onFirstPage())
<a style="opacity: 0.3;cursor: default;pointer-events: none;" class="pagination__prev">prev</a>
@else
<a class="pagination__prev" href="{{ $paginator->previousPageUrl() }}">prev</a>
@endif


@if ($paginator->hasMorePages())
<a class="pagination__next" href="{{ $paginator->nextPageUrl() }}">next</a>
@else
<a style="opacity: 0.3;cursor: default;pointer-events: none;" class="pagination__next">next</a>
@endif

@endif