@extends('layouts.admin')

@section('content')

    <section class="mt-10 text-smx">
        <table id="dataTable">
            <thead class="text-browngold text-left">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody class="black">
                @foreach ($contacts as $contact)
                    <tr>
                        <td> {{ ucwords($contact->name) }} </td>
                        <td> {{ $contact->email }} </td>
                        <td> {{ ucwords($contact->phone) }} </td>
                        <td> {{ ucwords($contact->message) }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
