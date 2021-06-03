@extends('layouts.admin')

@section('content')

    <section class="flex justify-between mt-10">
        <p class="text-teal font-bold text-4xl"> All Properties</p>
        <div>
            <a href="{{ url('/admin/properties/new') }}" class="bg-teal-600 list px-5 py-2 rounded-3xl text-sm text-white"> List new property </a>
        </div>
    </section>

    <section class="gap-5 grid grid-cols-4 mt-20">
        <div class="bg-white box-shadow">
            <a href="{{ url('/admin/properties/single') }}">
                <img src="{{ asset('/assets/four.jpg') }}" alt="" class="h-44 object-center object-cover rounded-br-full w-full">
                <div class="px-3 py-2 text-gray-600 text-xs">
                    <p class="text-sm font-bold"> 9902 Old Springs Road </p>
                    <p class="py-2.5"> <i class="fa fa-map-marker"></i> Lagos, Nigeria </p>
                    <div class="flex justify-between">
                        <p>5,1200,00 sq/ft</p>
                        <p>₦5,000,00.00</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="bg-white box-shadow">
            <img src="{{ asset('/assets/one.jpg') }}" alt="" class="h-44 object-center object-cover rounded-br-full w-full">
            <div class="px-3 py-2 text-gray-600 text-xs">
                <p class="text-sm font-bold"> 9902 Old Springs Road </p>
                <p class="py-2.5"> <i class="fa fa-map-marker"></i> Lagos, Nigeria </p>
                <div class="flex justify-between">
                    <p>5,1200,00 sq/ft</p>
                    <p>₦5,000,00.00</p>
                </div>
            </div>
        </div>
        <div class="bg-white box-shadow">
            <img src="{{ asset('/assets/six.jpg') }}" alt="" class="h-44 object-center object-cover rounded-br-full w-full">
            <div class="px-3 py-2 text-gray-600 text-xs">
                <p class="text-sm font-bold"> 9902 Old Springs Road </p>
                <p class="py-2.5"> <i class="fa fa-map-marker"></i> Lagos, Nigeria </p>
                <div class="flex justify-between">
                    <p>5,1200,00 sq/ft</p>
                    <p>₦5,000,00.00</p>
                </div>
            </div>
        </div><div class="bg-white box-shadow">
            <img src="{{ asset('/assets/three.jpg') }}" alt="" class="h-44 object-center object-cover rounded-br-full w-full">
            <div class="px-3 py-2 text-gray-600 text-xs">
                <p class="text-sm font-bold"> 9902 Old Springs Road </p>
                <p class="py-2.5"> <i class="fa fa-map-marker"></i> Lagos, Nigeria </p>
                <div class="flex justify-between">
                    <p>5,1200,00 sq/ft</p>
                    <p>₦5,000,00.00</p>
                </div>
            </div>
        </div>
    </section>

@endsection
