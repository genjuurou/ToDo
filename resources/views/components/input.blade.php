@props(['label'])

<label>
    <span>{{ $label }}</span>
    
    <input {{ $attributes->merge([
        'class' => ''
    ])}}>
</label>
