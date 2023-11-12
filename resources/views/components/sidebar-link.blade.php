@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-red-700'
            : 'bg-blue-700';          
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
