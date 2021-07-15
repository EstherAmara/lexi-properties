@extends('layouts.app')

@section('content')

<style>
    .navig nav div:nth-child(2) {
        flex-direction: column;
    }
    .navig  div:first-child {
        margin-top: 5px;
    }
</style>

    <section class="bg-center bg-cover bg-no-repeat bg-t-black flex h-screen items-center justify-center md:h-96 pt-16" style="background-image: url({{ asset('/assets/images/props.jpg') }})">
        <p class="font-semibold home text-center text-white bebas-neue"> Properties Available </p>
    </section>

    <section class="mx-auto my-32 w-10/12 lg:w-2/3">
        <div class="gap-5 grid grid-cols-1 md:gap-4 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($allProperties as $property)
                <div class="bg-white box-shadow">
                    <a href="{{ url('/properties/'.$property->slug) }}">
                        <img src="{{ asset($property->index_image) }}" alt="" class="h-52 object-center object-cover rounded-br-full w-full">
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
        </div>
    </section>

    <section>
        <div class="flex justify-center items-center navig">
            {{$allProperties->links()}}
        </div>
    </section>

@endsection
