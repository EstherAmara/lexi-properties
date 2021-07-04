@extends('layouts.admin')

@section('content')

    <section>
        <p class="font-bold text-teal text-3xl"> Inspection for <a class="underline" href="{{ url('/admin/properties/'.$inspection->property->slug) }}">{{ $inspection->property->title }}</a> </p>
        <div class="flex flex-col mt-10 sm:flex-row sm:space-x-10 sm:space-y-0 space-x-0 space-y-10">
            <div class="w-1/3">
                <div>
                    <img src="{{ asset($inspection->property->pictures) }}" alt="" class="border-2 border-teal-500 rounded-lg">
                </div>
            </div>
            <div class="w-2/3">
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
