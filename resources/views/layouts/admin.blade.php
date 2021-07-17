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

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.9.55/css/materialdesignicons.min.css" rel="stylesheet">


    <!-- Slick -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">

</head>

<body class="bg-gray-100 antialiased leading-none font-sans">
    <div class="lg:flex min-h-screen relative">

        {{-- mobile menu bar --}}
        <div class="bg-dark flex justify-between lg:hidden md:px-10 px-5 pt-7 relative text-teal">
            {{-- logo --}}
            <div class="lg:w-24 my-auto w-1/6">
                <span class="mb-8 mt-3 self-center"><a href="{{ url('/') }}" class="pattaya text-teal text-2xl">
                    Lexi <br> Properties
                </a></span>
            </div>
            {{-- mobile side bar --}}
            <button class="mobile-menu-button py-4 focus:outline-none text-teal">
                <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>

        <header class="bg-white duration-200 ease-in-out fixed inset-y-0 left-0 lg:relative lg:translate-x-0 px-7 py-7 sidebar space-y-6 text-sm transform transition w-64 z-40 -translate-x-full">
            <nav class="flex flex-1 flex-col font-bold h-screen sidebar space-y-2 text-gray-500">
                <span class="mb-8 mt-3 self-center"><a href="{{ url('/') }}" class="font-normal pattaya text-teal text-4xl">
                    Lexi <br> Properties
                </a></span>
                <a href="{{ url('/admin') }}" class="hover:bg-gray-200 p-4 rounded @if(Request::is('admin')){{'active'}} @endif"> Dashboard </a>

                <a href="{{ url('/admin/properties') }}" class="hover:bg-gray-500 p-4 rounded @if (Request::segment(2) == ('properties')){{ 'active' }}@endif"> Properties </a>

                <a href="{{ url('/admin/inspections') }}" class="hover:bg-gray-500 p-4 rounded @if (Request::segment(2) == ('inspections')){{ 'active' }}@endif"> Inspections </a>

                <a href="{{ url('/admin/settings') }}" class="hover:bg-gray-500 p-4 rounded @if (Request::segment(2) == ('settings')){{ 'active' }}@endif"> Settings </a>


                {{-- <a href="{{ url('/') }}" class="p-4 rounded @if(Request::is('/')){{'active'}}@endif"> Home </a>

                <a href="" class="p-4 rounded"> Land Banking Investment </a> --}}

                <a href="{{ url('/admin/contacts') }}" class="p-4 rounded @if(Request::segment(2) == ('contacts')){{'active'}}@endif"> Contacts </a>
            </nav>
        </header>

        <main class="flex-1">
            <div  class="misty-blue py-6">

            </div>
            <div>
                @include('layouts.alert')
                @yield('content')
            </div>
        </main>
    </div>

    <!-- Datatable JS -->
    <script src="{{ asset('js/jquery-slim.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>


    <!-- Slick Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

        console.log('hello');
        $('#dataTable').DataTable({
            "order": [],
        });

        const btn = document.querySelector('.mobile-menu-button');
            const sidebar = document.querySelector('.sidebar');

            btn.addEventListener('click', () =>{
                console.log('hello');
                sidebar.classList.toggle('-translate-x-full');
            });

        const alertPopUp = document.getElementById('alert');

        alertPopUp.addEventListener('click', removeAlertPopUp);

        function removeAlertPopUp(e) {
            if(e.target.tagName === 'SPAN' || e.target.tagName === 'I') {
                alertPopUp.classList.add('hidden')
            }
        }
    </script>
</body>
</html>
