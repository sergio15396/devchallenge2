<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    {{-- Auth links --}}
    @if (Route::has('login'))
        <nav class="top-nav" aria-label="Authentication links">
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="secondary">Register</a>
                @endif
            @endauth
        </nav>
    @endif

    {{-- Logo + Title --}}
    <main role="main">
        <div class="logo-title">{{ config('app.name', 'DevChallenge2') }}</div>
        <div class="logo">
            <img src="{{ asset('img/list-logo3.png') }}" alt="{{ config('app.name', 'Logo') }}" class="logo-img">
        </div>
    </main>

    {{-- Footer --}}
    <footer>
        <p>&copy; {{ date('Y') }} {{ config('app.name', 'DevChallenge2') }} by Juan Martín & Sergio Reyes.</p>
    </footer>

</body>
</html>
