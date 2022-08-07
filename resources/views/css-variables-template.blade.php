<style>
    :root {
        @foreach($colors as $color)
            --color-{{ $colorName }}-{{ $loop->index + 1 }}00: {{ $color }};
        @endforeach
    }
</style>