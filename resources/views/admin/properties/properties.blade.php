@extends('layouts.admin')

@section('content')

    <section class="dark-ivory flex flex-col font-bold items-center justify-between md:flex-row md:space-y-0 px-8 py-2 text-teal-600 text-left text-xl space-y-8">
        <p class="font-bold text-xl"> All Properties</p>
        <div class="flex items-center">
            <a href="{{ url('/admin/properties/new') }}" class="bg-teal-600 list px-4 py-2 rounded-3xl text-sm text-white"> List new property </a>
        </div>
    </section>

    <section class="gap-8 grid grid-cols-1 lg:grid-cols-3 lg:gap-5 md:gap-4 md:grid-cols-2 mt-20 px-8 xl:grid-cols-4">
        @foreach ($allProperties as $property)
            <div class="bg-white box-shadow">
                <a href="{{ url('/admin/properties/'.$property->slug) }}">
                    <img src="{{ asset($property->pictures) }}" alt="" class="h-44 object-center object-cover rounded-br-full w-full">
                    <div class="px-3 py-2 text-gray-600 text-xs">
                        <p class="text-sm font-bold"> {{ $property->title }} </p>
                        <p class="py-2.5"> <i class="fa fa-map-marker"></i> {{ $property->city }}, {{ $property->state }} </p>
                        <div class="flex justify-between">
                            <p>{{ $property->measurement }}</p>
                            <p>₦{{ number_format($property->amount) }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </section>

@endsection
