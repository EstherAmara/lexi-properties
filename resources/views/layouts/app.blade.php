<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-slim.min.js') }}"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.9.55/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="absolute mt-14 w-full">
            <nav class="flex font-semibold hver justify-between mx-auto open-sans p-6 space-x-4 text-white text-xl sm:text-base w-2/3">
                <a href="" class="t-shadow"> Properties </a>

                <a href="" class="t-shadow"> About </a>

                <a href="{{ url('/') }}" class="t-shadow @if(Request::is('/')){{'active'}}@endif"> Home </a>

                <a href="{{ url('/land-banking-investment') }}" class="t-shadow @if(Request::is('land-banking-investment')){{ 'active' }}@endif"> Land Banking Investment </a>

                <a href="{{ url('/contact-me') }}" class="t-shadow @if(Request::is('contact-me')){{ 'active' }}@endif"> Contact </a>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="bg-ivory py-7">
                <div class=" flex justify-between mx-auto w-2/3">
                    <div class="flex text-lg text-gray-200 space-x-5">
                        <i class="border fa fa-facebook flex h-8 items-center justify-center rounded-full text-center w-8"></i>
                        <i class="border fa fa-twitter flex h-8 items-center justify-center rounded-full text-center w-8"></i>
                        <i class="border fa fa-instagram flex h-8 items-center justify-center rounded-full text-center w-8"></i>
                    </div>
                    <div>
                        <form action="#" class="">
                            <div class="border flex items-center px-2 py-1 rounded space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5" fill="none" viewBox="0 0 24 24" stroke="#d2d6dc">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                  </svg>
                                <input type="text" class="bg-transparent focus:outline-none placeholder-gray-300" name="search" placeholder="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="bg-misty-blue py-20 text-center text-md">
                <p class="text-white"> Lexi Properties, Lagos State, Nigeria </p>
                <p class="mt-3 text-white"> &copy; {{ now()->year }} | All rights reserved | Designed with &hearts; by Esthere </p>
            </div>
        </footer>
    </div>
</body>
</html>
