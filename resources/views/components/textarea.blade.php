@props(['label'])

<label>
    <span class="font-medium">{{ $label }}</span>
    
    <textarea {{ $attributes->merge([
        'class' => 'w-full px-3 py-2 bg-gray-200 border border-transparent rounded-md focus:outline-none focus:border-indigo-600 focus:ring-indigo-600 focus:ring-1'
    ])}}></textarea>
</label>
