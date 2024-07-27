@props(['message', 'style'])

<style>
    .bg {
        background: green;
    }
</style>

<button {{
    $attributes->merge(
            [
                'class' => 'bg',
                'style' => 'border: 1px solid yellow;' . $style
            ]
        )
    }}
>
    <?php //echo $displayText; ?>

    {{-- {{ $displayText }} --}}

    {{ $message }}
</button>
