@if (count($breadcrumbs) )
    <nav class="mb-4">
        <ol class="flex flex-wrap">
            @foreach ($breadcrumbs as $item)
                <li
                    class="text-sm leading-normal text-slate-700 {{ !$loop->first ? 'pl-2 before:float-left before:pr-2 before:content-[">"]' : '' }}">
                    @isset($item['route'])
                        <a href="{{ $item['route'] }}" class="text-slate-700 hover:text-slate-900">{{ $item['title'] }}</a>
                    @else
                        {{ $item['title'] }}
                    @endisset

                </li>
            @endforeach
        </ol>
        @if (count($breadcrumbs) > 1)
            <h6 class="font-bold">
                {{ $breadcrumbs[count($breadcrumbs) - 1]['title'] }}
            </h6>

        @endif

    </nav>

@endif
