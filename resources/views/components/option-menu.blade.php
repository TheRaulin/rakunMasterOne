@props(['active', 'icon'])

@php
$classes = ($active ?? false)
            ? 'h-0.8/10 w-full bg-three-50 rounded-xl flex items-center'
            : 'h-0.8/10 w-full  rounded-xl flex items-center hover:bg-second-50';
            
$iconClass = ($active ?? false)
            ? 'mx-3 border-4 rounded-md border-white bg-white text-three-50'
            : 'mx-3 border-4 rounded-md border-primary-50 text-text-50'; 
     
 $textClas = ($active ?? false)
            ? 'inline text-lg mx text-white'
            : 'inline text-lg mx text-text-50';             
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <i class="{{ $icon }} {{ $iconClass }}"></i>
    <p class="{{ $textClas }}">{{ $slot}}</p>
</a>
