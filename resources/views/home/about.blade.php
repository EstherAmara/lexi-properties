@extends('layouts.app')

@section('content')

    <section class="bg-top bg-cover bg-no-repeat bg-t-black flex h-screen items-center justify-center md:h-96 pt-16" style="background-image: url({{ asset('/assets/images/about-us.jpg') }})">
        <p class="font-semibold home text-center text-white bebas-neue"> About Us </p>
    </section>

    <section class="mx-auto my-24 lg:w-2/3 w-10/12">
        <div class="flex space-x-5">
            <div class="agent-note flex flex-col space-y-5 w-2/3">
                <div>
                    {{ $settings->about_first ?? '' }}
                </div>
                <div>
                    {{ $settings->about_second ?? '' }}
                </div>
            </div>
            <div class="max-h-96 w-1/3">
                <img src="{{ asset($settings->image ?? '#') }}" alt="" class="h-full object-center object-cover w-full">
            </div>
        </div>
    </section>

@endsection
