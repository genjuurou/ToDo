@props(['color'])

<div {{ $attributes->merge(['class' => 'bg-'.$color.'-500 rounded-full'])}}"></div>
