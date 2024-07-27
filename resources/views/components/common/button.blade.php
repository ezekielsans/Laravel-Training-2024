@props(['message', 'style' => ''])

<style>
    .bg {
        background: green;
    }
</style>

<button {{
    $attributes->merge(
            [
                'class' => 'bg',
                'style' => 'width: 50%; background: lightblue; border: none; cursor: pointer' . $style
            ]
        )
    }}
>
    <?php //echo $displayText; ?>

    {{-- {{ $displayText }} --}}

    {{ $message }}
</button>
