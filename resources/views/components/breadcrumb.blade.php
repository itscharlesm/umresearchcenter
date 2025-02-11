<nav aria-label="breadcrumb">
    <ol class="breadcrumb mt-5" style="color: white;">
        @foreach ($items as $item)
            <li class="breadcrumb-item {{ $item['active'] ? 'active' : '' }}"
                {{ $item['active'] ? 'aria-current="page"' : '' }}>
                @if (!$item['active'])
                    <a href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                @else
                    {{ $item['label'] }}
                @endif
            </li>
        @endforeach
    </ol>
</nav>
