@props([
    'size' => 'md',
])

@php
    $dim = $size === 'lg' ? 'w-12 h-12 rounded-2xl' : 'w-10 h-10 rounded-xl';
    $svgSize = $size === 'lg' ? 28 : 22;
@endphp

<div class="{{ $dim }} bg-gradient-to-br from-primary via-[#6C5CE7] to-secondary flex items-center justify-center text-on-primary shadow-[0_6px_16px_-2px_rgba(83,65,205,0.38)] shrink-0 relative overflow-hidden" aria-hidden="true">
    <svg width="{{ $svgSize }}" height="{{ $svgSize }}" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M16 3L4 9L16 15L28 9L16 3Z" fill="white" fill-opacity="0.95"/>
        <path d="M8 12.5V20.5C8 23.8 11.58 26.5 16 26.5C20.42 26.5 24 23.8 24 20.5V12.5L16 16.5L8 12.5Z" fill="white" fill-opacity="0.25" stroke="white" stroke-width="2" stroke-linejoin="round"/>
        <path d="M16 17.5L17.3 20.2L20.2 20.6L18.1 22.6L18.6 25.5L16 24.1L13.4 25.5L13.9 22.6L11.8 20.6L14.7 20.2L16 17.5Z" fill="#FEF08A"/>
        <path d="M26 10.5V17.5" stroke="#FEF08A" stroke-width="2" stroke-linecap="round"/>
        <circle cx="26" cy="18.5" r="1.5" fill="#FEF08A"/>
    </svg>
</div>
