@extends('layouts.app')

@section('content')

    <section class="bg-center bg-cover bg-no-repeat flex h-96 items-center justify-center pt-12" style="background-image: url({{ asset('/assets/props.jpg') }})">
        <p class="font-semibold home text-white bebas-neue"> Properties Available </p>
    </section>

    <section class="mx-auto my-32 w-2/3">
        <div class="gap-4 grid grid-cols-3">
            @foreach ($allProperties as $property)
                <div class="bg-white box-shadow">
                    <a href="{{ url('/properties/'.$property->id) }}">
                        <img src="{{ asset($property->pictures) }}" alt="" class="h-52 object-center object-cover rounded-br-full w-full">
                        <div class="px-3 py-2 text-gray-600 text-xs">
                            <p class="text-sm font-bold"> {{ $property->title }} </p>
                            <p class="py-2.5"> <i class="fa fa-map-marker"></i> {{ $property->city }}, {{ $property->state }} </p>
                            <div class="flex justify-between">
                                <p>{{ $property->measurement }}</p>
                                <p>₦{{ $property->amount }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

@endsection
