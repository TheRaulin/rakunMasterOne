@props(['active'])

@php
$classes = ($active ?? false)
            ? 'h-0.8/10 w-full bg-red-700 rounded-xl'
            : 'h-0.8/10 w-full bg-blue-700 rounded-xl'; 
            
$iconClass = ($active ?? false)
            ? ''
            : ''; 
     
 $textClass = ($active ?? false)
            ? ''
            : ''; 
       
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot}}
</a>
