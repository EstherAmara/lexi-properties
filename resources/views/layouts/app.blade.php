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
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">

</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="absolute pt-5 md:pt-14 w-full">
            <nav>
                <div class="font-semibold hidden hver justify-between md:flex mx-auto open-sans p-6 space-x-4 text-white text-xl sm:text-base lg:w-2/3 w-10/12">
                    <a href="{{ url('/properties') }}" class="t-shadow @if(Request::segment(1) === ('properties')){{'active'}}@endif"> Properties </a>

                    <a href="{{ url('/about') }}" class="t-shadow @if(Request::segment(1) === ('about')){{'active'}}@endif"> About Us </a>

                    <a href="{{ url('/') }}" class="t-shadow @if(Request::is('/')){{'active'}}@endif"> Home </a>

                    <a href="{{ url('/land-banking-investment') }}" class="t-shadow @if(Request::is('land-banking-investment')){{ 'active' }}@endif"> Land Banking Investment </a>

                    <a href="{{ url('/contact-us') }}" class="t-shadow @if(Request::is('contact-us')){{ 'active' }}@endif"> Contact Us</a>
                </div>

                {{-- mobile nav --}}
                <div class="md:hidden">
                    <div class="flex justify-between p-5">
                        <a href={{ url('/') }}><span class="pattaya text-yellow-50 text-lg"> Lexi <br> Properties</span></a>
                        <i id="showNav" class="fa fa-bars text-2xl text-yellow-50"></i>
                    </div>
                    <div class="flex flex-col hidden bg-lemon-a" id="mobileNav">
                        <a href="{{ url('/properties') }}" class="font-semibold px-5 py-4 text-white @if(Request::segment(1) === ('properties')){{'bg-purple-a'}}@endif"> Properties </a>

                        <a href="{{ url('/about') }}" class="font-semibold px-5 py-4 text-white @if(Request::segment(1) === ('about')){{'bg-purple-a'}}@endif"> About </a>

                        <a href="{{ url('/') }}" class="font-semibold px-5 py-4 text-white @if(Request::is('/')){{'bg-purple-a'}}@endif"> Home </a>

                        <a href="{{ url('/land-banking-investment') }}" class="font-semibold px-5 py-4 text-white @if(Request::is('land-banking-investment')){{ 'bg-purple-a' }}@endif"> Land Banking Investment </a>

                        <a href="{{ url('/contact-us') }}" class="font-semibold px-5 py-4 text-white @if(Request::is('contact-us')){{ 'bg-purple-a' }}@endif"> Contact Us </a>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            @include('layouts.alert')
            @yield('content')
        </main>

        <footer>
            <div class="bg-ivory py-7">
                <div class="flex flex-col justify-between md:flex-row md:space-y-0 mx-auto space-y-5 w-2/3">
                    <div class="flex justify-center text-lg text-gray-200 space-x-5">
                        <a href="{{ $settings->facebook ?? '#' }}" title="Facebook">
                            <i class="border fa fa-facebook flex h-8 items-center justify-center rounded-full text-center w-8"></i>
                        </a>
                        <a href="{{ $settings->instagram ?? '#' }}" title="Instagram">
                            <i class="border fa fa-instagram flex h-8 items-center justify-center rounded-full text-center w-8"></i>
                        </a>
                        <a href="{{ $settings->youtube ?? '#' }}" title="YouTube">
                            <i class="border fa fa-youtube flex h-8 items-center justify-center rounded-full text-center w-8"></i>
                        </a>
                        <a href="{{ $settings->twitter ?? '#' }}" title="Twitter">
                            <i class="border fa fa-twitter flex h-8 items-center justify-center rounded-full text-center w-8"></i>
                        </a>
                    </div>
                    <div>
                        <form action="{{ url('/search') }}" class="" method="POST">
                            @csrf
                            <div class="border flex items-center px-2 py-1 rounded space-x-2">
                                <button type="submit" class="cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5" fill="none" viewBox="0 0 24 24" stroke="#d2d6dc">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </button>
                                <input type="text" class="bg-transparent focus:outline-none placeholder-gray-300" name="search" placeholder="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="bg-misty-blue py-20 text-center text-md">
                <p class="text-white"> {{ $settings->address ?? '' }} </p>
                <p class="flex flex-col md:flex-row md:justify-center md:space-y-0 mt-3 space-y-2 text-white">
                    <span> &copy; {{ now()->year }} | All rights reserved | </span>
                    <span> &nbsp;Designed with &hearts; by Esthere </span>
                </p>
            </div>
        </footer>
    </div>

    <!-- Slick Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        document.getElementById('showNav').addEventListener('click', function(e) { document.getElementById('mobileNav').classList.toggle('hidden')})
    </script>
</body>
</html>
