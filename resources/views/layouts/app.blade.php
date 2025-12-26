<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <!-- Link your CSS file from public folder -->
    <!-- Filament CSS -->
<link rel="stylesheet" href="{{ asset('css/filament/filament/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/filament/forms/forms.css') }}">
<link rel="stylesheet" href="{{ asset('css/filament/support/support.css') }}">

    <!-- Link your JS file from public folder -->
    <!-- Filament JS -->
<script src="{{ asset('js/filament/filament/app.js') }}" defer></script>
<script src="{{ asset('js/filament/forms/forms.js') }}" defer></script>
<script src="{{ asset('js/filament/support/support.js') }}" defer></script>

</head>
<body>
    <!-- Optional header -->
    @include('partials.header')

    <!-- Page content goes here -->
    <main>
        @yield('content')
    </main>

    <!-- Optional footer -->
    @include('partials.footer')
</body>
</html>
