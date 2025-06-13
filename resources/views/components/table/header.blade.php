@props(['align' => 'left'])

<th {{ $attributes->merge(['class' => 'py-3 px-4 text-' . $align]) }}>
    {{ $slot }}
</th> 