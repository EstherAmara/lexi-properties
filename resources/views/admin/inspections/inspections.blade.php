@extends('layouts.admin')

@section('content')

    <section class="dark-ivory font-bold px-8 py-2 text-teal-600 text-left text-xl">
        <p> Inspections </p>
    </section>

    <section class="mt-20 px-8 text-smx">
        <table id="dataTable">
            <thead class="text-browngold text-left">
                <tr>
                    <th>Name</th>
                    <th>Message</th>
                    <th>Property</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="black font-semibold">
                @foreach ($inspections as $inspection)
                    <tr>
                        <td> {{ ucwords($inspection->name) }} </td>
                        <td> {{ ucwords($inspection->message) }} </td>
                        <td>
                            <a href="{{ url('/admin/properties/'.$inspection->property->slug) }}" class="underline"> {{ $inspection->property->title }} </a>
                        </td>
                        <td> {{ Carbon\Carbon::create($inspection->date)->format('l jS \of F Y') }} </td>
                        <td> {{ Carbon\Carbon::create($inspection->time)->format('h:i:s A') }} </td>
                        <td>
                            <a href="{{ url('/admin/inspections/'.$inspection->id.'/single') }}" class="border border-teal-500 hover:bg-teal-500 icon px-1.5 rounded">
                                <i class="fa fa-eye text-teal-500"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
