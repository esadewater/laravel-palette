@php
    /** @var $colors \Illuminate\Support\Collection<\MikeAlmond\Color\Color> */
@endphp

<style>
    :root {
        @foreach($colors as $color)
            --color-{{ $colorName }}-{{ $loop->index + 1 }}00: rgb({{ color($color) }});
        @endforeach
    }
</style>
