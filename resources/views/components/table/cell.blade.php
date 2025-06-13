@props(['align' => 'left'])

<td {{ $attributes->merge(['class' => 'py-3 px-4 text-' . $align]) }}>
    {{ $slot }}
</td> 