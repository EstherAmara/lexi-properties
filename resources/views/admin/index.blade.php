@extends('layouts.admin')

@section('content')


    <section class="dark-ivory font-bold px-8 py-2 text-teal-600 text-left text-xl">
        <p> Dashboard </p>
    </section>

    <section class="mt-10 px-8">
        <div class="gap-10 grid grid-cols-3 text-center">
            <a href="{{ url('/admin/contacts') }}" class="box-contacts text-base">
                <p class="mb-3 text-xl">{{ $numberOfContacts }}</p>
                <p> {{ $numberOfContacts === 1 ? 'CONTACT' : 'CONTACTS' }} </p>
            </a>
            <a href="{{ url('/admin/inspections') }}" class="box-inspections text-base">
                <p class="mb-3 text-xl">{{ $numberOfInspections }}</p>
                <p> {{ $numberOfInspections === 1 ? 'INSPECTION' : 'INSPECTIONS' }} </p>
            </a>
            <a href="{{ url('/admin/properties') }}" class="box-properties text-base">
                <p class="mb-3 text-xl">{{ $numberOfProperties }}</p>
                <p> {{ $numberOfProperties === 1 ? 'PROPERTY' : 'PROPERTIES' }} </p>
            </a>
        </div>
    </section>

    <section class="mt-20 px-8">
        <div class="gap-8 grid grid-cols-2">
            <div class="bg-white py-4 rounded table-container">
                <div class="flex justify-between px-4">
                    <p class="font-semibold text-teal-600"> Recent Contacts </p>
                    <a href="{{ url('/admin/contacts') }}" class="border border-teal-600 px-2 py-1 rounded-sm text-sm text-teal-600">See all</a>
                </div>
                <table class="mt-3 w-full text-left small-table text-sm">
                    <thead class="font-semibold">
                        <tr>
                            <th>Name</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td> {{ $contact->name }} </td>
                                <td> {{ $contact->message }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="bg-white py-4 rounded table-container">
                <div class="flex justify-between px-4">
                    <p class="font-semibold text-teal-600"> Recent Properties </p>
                    <a href="{{ url('/admin/properties') }}" class="border border-teal-600 px-2 py-1 rounded-sm text-sm text-teal-600"> See all </a>
                </div>
                <table class="mt-3 w-full text-left small-table text-sm">
                    <thead class="font-semibold">
                        <tr>
                            <th>Title</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($properties as $property)
                            <tr>
                                <td> {{ $property->title }} </td>
                                <td> ₦{{ number_format($property->amount) }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="bg-white py-4 rounded col-span-2 table-container">
                <div class="flex justify-between px-4">
                    <p class="font-semibold text-teal-600"> Recent Inspections </p>
                    <a href="{{ url('/admin/inspections') }}" class="border border-teal-600 px-2 py-1 rounded-sm text-sm text-teal-600"> See all </a>
                </div>
                <table class="mt-3 small-table text-left text-sm w-full">
                    <thead class="font-semibold">
                        <th>Name</th>
                        <th>Property</th>
                        <th>Date</th>
                        <th>Time</th>
                    </thead>
                    <tbody>
                        @foreach ($inspections as $inspection)
                            <tr>
                                <td> {{ $inspection->name }} </td>
                                <td> {{ $inspection->property->title }} </td>
                                <td> {{ Carbon\Carbon::create($inspection->date)->format('l jS \of F Y') }} </td>
                                <td> {{ Carbon\Carbon::create($inspection->time)->format('h:i:s A') }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
