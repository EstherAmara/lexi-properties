@extends('layouts.admin')

@section('content')

    <section class="dark-ivory font-bold md:px-10 px-5 py-2 text-teal-600 text-left text-xl">
        <p> Inspection for <a class="underline" href="{{ url('/admin/properties/'.$inspection->property->slug) }}">{{ $inspection->property->title }}</a> </p>
    </section>

    <section class="md:px-10 px-5">
        <div class="flex flex-col mt-20 sm:flex-row sm:space-x-10 sm:space-y-0 space-x-0 space-y-10">
            <div class="md:w-1/3 w-full">
                <div>
                    <img src="{{ asset($inspection->property->index_image) }}" alt="" class="border-2 border-teal-500 rounded-lg">
                </div>
            </div>
            <div class="md:w-2/3 w-full">
                <div class="contains">
                    <div class="flex justify-between">
                        <p> Name </p>
                        <p> {{ $inspection->name }} </p>
                    </div>
                    <div class="flex justify-between">
                        <p> Email </p>
                        <p> {{ $inspection->email }} </p>
                    </div>
                    <div class="flex justify-between">
                        <p> Phone </p>
                        <p> {{ $inspection->phone }} </p>
                    </div>
                    <div class="flex justify-between">
                        <p> Date </p>
                        <p> {{ Carbon\Carbon::create($inspection->date)->format('l jS \of F Y') }} </p>
                    </div>
                    <div class="flex justify-between">
                        <p> Time </p>
                        <p> {{ Carbon\Carbon::create($inspection->time)->format('h:i:s A') }} </p>
                    </div>
                    <div class="flex justify-between">
                        <p> Message </p>
                        <p> {{ $inspection->message }} </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
