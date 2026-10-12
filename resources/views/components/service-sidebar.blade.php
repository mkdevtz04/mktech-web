@props([
    'current',
    'ctaTitle',
    'ctaText',
    'ctaLabel' => 'Get in Touch',
])

@php
    $allServices = [
        'it' => 'IT Services',
        'graphics' => 'Graphics Design',
        'web' => 'Website Development',
        'mobile' => 'Mobile App Development',
        'cctv' => 'CCTV Camera & Security',
    ];
@endphp

<div class="service-sidebar">
    <div class="service-cta">
        <h3>{{ $ctaTitle }}</h3>
        <p>{{ $ctaText }}</p>
        <a href="{{ url('/#contact') }}" class="btn btn-primary btn-block">{{ $ctaLabel }}</a>
    </div>

    <div class="service-explore">
        <h4>Explore Other Services</h4>
        <ul>
            @foreach ($allServices as $key => $label)
                @continue($key === $current)
                <li><a href="{{ route('services.' . $key) }}">{{ $label }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
