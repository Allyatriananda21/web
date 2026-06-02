@props([
    'title' => '',
    'subtitle' => null,
    'button' => null,
    'bg' => false,
    'size' => null,
])

@php
    $titleClass = $size ?? ($bg ? 'h2 fw-bold' : 'h4 fw-bold');
    $subtitleClass = $bg ? 'text-white-75' : 'text-muted';
    $bgClass = $bg ? 'bg-primary text-white' : '';
    $buttonHtml = null;
@endphp

<div class="rounded-4 {{ $bgClass }} shadow-sm mb-4">
    <div class="p-4">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <h1 class="{{ $titleClass }} {{ $bg ? 'text-white' : '' }}">{{ $title }}</h1>
                @if($subtitle)
                    <p class="{{ $subtitleClass }} mb-0">{{ $subtitle }}</p>
                @endif
            </div>

            @if($button)
                @php
                    $btnClass = $button['variant'] ?? 'btn-light';
                    $btnText = $button['text'] ?? 'Back';
                    $btnUrl = $button['url'] ?? '#';
                @endphp
                <a href="{{ $btnUrl }}" class="btn {{ $btnClass }}">{{ $btnText }}</a>
            @endif
        </div>
    </div>
</div>
