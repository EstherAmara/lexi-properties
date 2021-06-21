@extends('layouts.app')

@section('content')
    <section class="bg-center bg-cover bg-no-repeat flex h-96 items-center justify-center pt-12" style="background-image: url({{ asset('/assets/images/five.jpg') }}); height: 90vh;">
        <p class="font-semibold home text-center text-white bebas-neue"> {{ $property->title }} </p>
    </section>

    <section class="mx-auto my-24 lg:w-2/3 w-10/12">
        <div class="flex flex-col justify-between md:flex-row">
            <div>
                <p class="about font-bold mb-2 text-3xl text-gray-700 relative"> About this property </p>
                <hr class="border border-yellow-200 hrr mt-4 w-52" />
            </div>
            <div class="mb-10">
                <a href="#bookInsection" id="scrollToBook" class="bg-teal px-6 py-2 rounded text-white"> Book Inspection </a>
            </div>
        </div>

        <div class="leading-7 mt-9 text-gray-800 text-lg">
            {{ $property->description }}
        </p>
    </section>

    <section class="mx-auto my-24 lg:w-2/3 w-10/12">
        <div class="font-medium gap-5 grid grid-cols-1 md:grid-cols-3 text-lg text-gray-500">
            <div class="border-l border-r flex items-center md:justify-center md:border-r-0 px-3 space-x-3">
                <span class="font-semibold text-teal-500 text-2xl">₦</span>
                <p> {{ number_format($property->amount) }} </p>
            </div>
            <div class="border-l border-r flex items-center md:justify-center md:border-r-0 px-3 space-x-3">
                <img src="{{ asset('/assets/svg/tape-measure-svgrepo-com.svg') }}" alt="" class="w-6 lg:w-7">
                <p> {{ $property->measurement }} </p>
            </div>
            <div class="border-l border-r flex items-center md:justify-center px-3 space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#0694a2">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <p> {{ $property->address . ', ' . $property->city . ', ' . $property->state }} </p>
            </div>
        </div>
    </section>

    <section class="h-10/12 mx-auto my-24 lg:w-2/3 w-10/12">
        <img src="{{ asset($property->pictures) }}" alt="" class="h-45 object-center object-cover w-full">
    </section>

    <section class="mx-auto my-24 lg:w-2/3 w-10/12">
        <div class="font-medium gap-5 grid grid-cols-1 md:grid-cols-2 text-lg text-gray-500">
            <div class="flex items-center justify-center px-3 space-x-3">
                <p class="flex items-center space-x-1 text-teal-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                    </svg>
                    <span> Nearest Location: </span>
                </p>
                <p> {{ $property->proximity }} </p>
            </div>
            <div class="flex items-center justify-center px-3 space-x-3">
                <p class="flex items-center space-x-1 text-teal-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                    </svg>
                    <span> Topography: </span>
                </p>
                <p> {{ $property->topography }} </p>
            </div>
        </div>
    </section>

    <section class="mx-auto my-24 lg:w-2/3 w-10/12">
        <div>
            <p class="about font-bold mb-2 text-3xl text-gray-700 relative"> Mortgage Plans </p>
            <hr class="border border-yellow-200 hrr mt-4 w-52" />
        </div>

        <div class="leading-7 mt-9 text-gray-800 text-lg">
            {{ $property->payment_plan }}
        </div>

        <div class="mt-5">
            <button id="showBook" class="bg-teal px-6 py-2 rounded text-white"> Book Inspection </button>
        </div>
        <div class="hidden mt-5" id="bookInspection">
            <form action="" id="main">
                <input type="text" placeholder="Name" name="name" class="block border border-red-50 focus:outline-none mb-2 p-2 rounded w-full">
                <input type="text" placeholder="Email" name="email" class="block border border-red-50 focus:outline-none mb-2 p-2 rounded w-full">
                <input type="text" placeholder="Phone" name="phone" class="block border border-red-50 focus:outline-none mb-2 p-2 rounded w-full">
                <textarea name="message" id="" cols="30" rows="10" placeholder="Message" class="block p-2 w-full"></textarea>
                <input type="submit" value="Book" class="bg-peach cursor-not-allowed mt-4 py-2 px-8 rounded text-white" disabled>
            </form>
        </div>
    </section>

    <script>
        document.getElementById('showBook').addEventListener('click', function(e) { document.getElementById('bookInspection').classList.toggle('hidden')})
    </script>
@endsection
