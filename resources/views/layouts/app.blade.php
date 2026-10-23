<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $p['name'] }} · {{ $p['title'] }}</title>
    <meta name="description" content="{{ $p['name'] }}: {{ $p['title'] }} based in {{ $p['location'] }}. {{ $p['tagline'] }}">
    <meta name="theme-color" content="#0b1f3a">

    <meta property="og:type" content="profile">
    <meta property="og:title" content="{{ $p['name'] }} · {{ $p['title'] }}">
    <meta property="og:description" content="{{ $p['tagline'] }}">
    <meta property="og:url" content="{{ url('/') }}">
    <link rel="canonical" href="{{ url('/') }}">

    <script>document.documentElement.classList.add('js');</script>
    <link rel="icon" href="{{ asset('img/favicon.svg') }}" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}?v={{ @filemtime(public_path('css/portfolio.css')) }}">

    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            'name' => $p['name'],
            'jobTitle' => $p['title'],
            'email' => 'mailto:'.$p['email'],
            'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'Toronto', 'addressRegion' => 'ON', 'addressCountry' => 'CA'],
            'knowsLanguage' => array_column($p['languages'], 'name'),
            'url' => url('/'),
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>

    @yield('content')

    <script src="{{ asset('js/portfolio.js') }}?v={{ @filemtime(public_path('js/portfolio.js')) }}" defer></script>
</body>
</html>
