@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
					
						<div class="data-showing my-auto mr-3">
							<p class="text-small mb-0">
								{!! __('Showing') !!}
								<span class="f-14">{{ $paginator->firstItem() }}</span>
								{!! __('to') !!}
								<span class="f-14">{{ $paginator->lastItem() }}</span>
								{!! __('of') !!}
								<span class="f-14">{{ $paginator->total() }}</span>
								{!! __('results') !!}
							</p>
						</div>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link border-0 f-28" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link border-0 f-28 onyx-color" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            {{-- @foreach ($elements as $element) --}}
                {{-- "Three Dots" Separator --}}
                {{-- @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link border-0">{{ $element }}</span></li>
                @endif --}}

                {{-- Array Of Links --}}
                {{-- @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link border-0">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif --}}
            {{-- @endforeach --}}

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link border-0 f-28 onyx-color" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link border-0 f-28" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
