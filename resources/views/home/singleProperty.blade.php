@extends('layouts.app')

@section('content')
    <section class="bg-center bg-cover bg-no-repeat flex h-96 items-center justify-center pt-12" style="background-image: url({{ asset('/assets/images/five.jpg') }}); height: 90vh;">
        <p class="font-semibold home text-white bebas-neue"> {{ $property->title }} </p>
    </section>

    <section class="mx-auto my-24 w-2/3">
        <div>
            <p class="about font-bold mb-2 text-3xl text-gray-700 relative"> About this property </p>
            <hr class="border border-yellow-200 hrr mt-4 w-52" />
        </div>

        <div class="leading-7 mt-9 text-gray-800 text-lg">
            {{ $property->description }}
        </p>
    </section>

    <section class="mx-auto my-24 w-2/3">
        <div class="font-medium gap-5 grid grid-cols-3 text-lg text-gray-500">
            <div class="border-l flex items-center justify-center px-3 space-x-3">
                <span class="font-semibold text-teal-500 text-2xl">₦</span>
                <p> {{ $property->amount }} </p>
            </div>
            <div class="border-l flex items-center justify-center px-3 space-x-3">
                <img src="{{ asset('/assets/svg/tape-measure-svgrepo-com.svg') }}" alt="" class="w-10 h-10">
                <p> {{ $property->measurement }} </p>
            </div>
            <div class="border-l border-r flex items-center justify-center px-3 space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" fill="none" viewBox="0 0 24 24" stroke="#0694a2">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <p> {{ $property->address . ', ' . $property->city . ', ' . $property->state }} </p>
            </div>
        </div>
    </section>

    <section class="mx-auto my-24 w-2/3">
        <img src="{{ asset($property->pictures) }}" alt="">
    </section>

    <section class="mx-auto my-24 w-2/3">
        <div class="font-medium gap-5 grid grid-cols-2 text-lg text-gray-500">
            <div class="flex items-center justify-center px-3 space-x-3">
                <p class="text-teal-600"> Nearest Location: </p>
                <p> {{ $property->proximity }} </p>
            </div>
            <div class="flex items-center justify-center px-3 space-x-3">
                <p class="text-teal-600"> Topography: </p>
                <p> {{ $property->topography }} </p>
            </div>
        </div>
    </section>

    <section class="mx-auto my-24 w-2/3">
        <div>
            <p class="about font-bold mb-2 text-3xl text-gray-700 relative"> Mortgage Plans </p>
            <hr class="border border-yellow-200 hrr mt-4 w-52" />
        </div>

        <div class="leading-7 mt-9 text-gray-800 text-lg">
            {{ $property->description }}
        </p>
    </section>
@endsection
