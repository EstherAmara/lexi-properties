@extends('layouts.admin')

@section('content')

    <section class="flex flex-col font-bold justify-between md:flex-row md:space-y-0 mt-10 space-y-8 text-teal text-4xl">
        <p> {{ $property->title }} </p>
        <div>
            <a href="{{ url('/admin/properties/'.$property->slug.'/edit') }}" class="bg-teal-600 list px-5 py-2 rounded-3xl text-sm text-white"> Edit property </a>
        </div>
    </section>

    <section class="my-24">
        <div>
            <p class="about font-bold mb-2 text-2xl text-teal-700 relative"> About this property </p>
            <hr class="border border-yellow-200 hrr mt-4 w-52" />
        </div>

        <div class="leading-7 mt-9 text-gray-800 text-lg">
            {{ $property->description }}
        </p>
    </section>

    <section class="my-24">
        <div class="font-medium gap-5 grid grid-cols-1 md:grid-cols-3 text-lg text-gray-500">
            <div class="border-l border-r flex items-center md:justify-center md:border-r-0 px-3 space-x-3">
                <span class="font-semibold text-teal-500 text-2xl">₦</span>
                <p> {{ number_format($property->amount) }} </p>
            </div>
            <div class="border-l border-r flex items-center md:justify-center md:border-r-0 px-3 space-x-3">
                <img src="{{ asset('/assets/svg/tape-measure-svgrepo-com.svg') }}" alt="" class="w-9 h-9">
                <p> {{ $property->measurement }} </p>
            </div>
            <div class="border-l border-r flex items-center md:justify-center px-3 space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="#0694a2">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <p> {{ $property->address . ', ' . $property->city . ', ' . $property->state }} </p>
            </div>
        </div>
    </section>

    <section class="my-24">
        <img src="{{ asset($property->pictures) }}" alt="">
    </section>

    <section class="my-24">
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

    <section class="my-24">
        <div>
            <p class="about font-bold mb-2 text-3xl text-gray-700 relative"> Mortgage Plans </p>
            <hr class="border border-yellow-200 hrr mt-4 w-52" />
        </div>

        <div class="leading-7 mt-9 text-gray-800 text-lg">
            {{ $property->payment_plan }}
        </div>
    </section>

@endsection