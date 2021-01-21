<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Inventario') }}</title>
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">
        <nav class="bg-blue-900 shadow mb-2 py-6">
            <div class="container mx-auto px-6 md:px-0">
                <div class="flex items-start justify-start">
                    <div class="mr-6">
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            3JMA - ADMINISTRATIVE
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    @yield('content')
    </div>
<!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://unpkg.com/phosphor-icons"></script>
</body>
</html>