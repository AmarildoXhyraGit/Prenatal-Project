@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}"  class="text-center" >
        <div class="sm:items-center -mb-2">
            <div>
                <p class="text-sm text-gray-700 leading-5">
                    {!! __('Hai visto') !!}
                    @if ($paginator->firstItem())
                        {{-- <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!} --}}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('di') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('articoli') !!}
                </p>
            </div>
    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}"   > <div class="text-white hover:bg-white bg-pink hover:text-pink border-2 mt-5 mb-10 rounded-full w-52  pt-2 pb-2 ml-20 md:ml-[310px] xl:ml-[600px] lg:ml-[370px]">
            Carica Altri 
        </div></a>
    @else
    @endif
            <div>
                <span class="relative z-0 inline-flex shadow-sm rounded-md">
                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="pl-3 ">{{ $element }}</span>
                            </span>
                        @endif
                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span class="pl-3 text-pink">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="pl-3 hover:text-pink" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </span>
            </div>
        </div>         
    </nav>
@endif
