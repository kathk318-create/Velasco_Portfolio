@props([
    'eyebrow' => '',
    'title' => '',
    'align' => 'center',
])

@php
    $alignClass = $align === 'left' ? 'items-start text-left' : 'items-center text-center';
@endphp

<div class="section-head flex flex-col {{ $alignClass }}">
    <span class="section-eyebrow mb-4 inline-flex items-center gap-3 text-xs font-medium tracking-[0.35em] uppercase">
        <span class="h-px w-8 bg-gradient-to-r from-transparent to-[#a855f7]" aria-hidden="true"></span>
        <span class="text-[#c084fc]">{{ $eyebrow }}</span>
        <span class="h-px w-8 bg-gradient-to-l from-transparent to-[#a855f7]" aria-hidden="true"></span>
    </span>
    <h2 class="section-title text-balance text-3xl font-bold tracking-tight text-[#f5eefe] sm:text-4xl lg:text-5xl">
        <span class="text-[#d8b4fe]">[</span>
        {{ $title }}
        <span class="text-[#d8b4fe]">]</span>
    </h2>
</div>