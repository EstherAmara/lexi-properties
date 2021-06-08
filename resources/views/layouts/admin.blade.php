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

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.9.55/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">

</head>

<body class="bg-gray-100 antialiased leading-none font-sans">
    <div class="lg:flex min-h-screen relative">

        <header class="bg-white duration-200 ease-in-out fixed inset-y-0 left-0 lg:relative lg:translate-x-0 px-7 py-7 sidebar space-y-6 text-sm transform transition w-64 z-40 -translate-x-full">
            <nav class="flex flex-1 flex-col font-bold h-screen sidebar space-y-2 text-gray-500">
                <span class="mb-8 mt-3 self-center"><a href="{{ url('/') }}" class="pattaya text-teal text-4xl">
                    Lexi <br> Properties
                </a></span>
                <a href="{{ url('/admin') }}" class="hover:bg-gray-200 p-4 rounded @if(Request::is('admin')){{'active'}} @endif"> Dashboard </a>

                <a href="{{ url('/admin/properties') }}" class="hover:bg-gray-500 p-4 rounded @if (Request::segment(2) == ('properties')){{ 'active' }}@endif"> Properties </a>

                <a href="{{ url('/') }}" class="p-4 rounded @if(Request::is('/')){{'active'}}@endif"> Home </a>

                <a href="" class="p-4 rounded"> Land Banking Investment </a>

                <a href="{{ url('/admin/contacts') }}" class="p-4 rounded @if(Request::segment(2) == ('contacts')){{'active'}}@endif"> Contacts </a>
            </nav>
        </header>

        <main class="flex-1 p-8">
            @include('layouts.alert')
            @yield('content')
        </main>
    </div>

    <!-- Datatable JS -->
    <script src="{{ asset('js/jquery-slim.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script>
        console.log('hello');
        $('#dataTable').DataTable({
            "order": [],
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