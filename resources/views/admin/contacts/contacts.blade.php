@extends('layouts.admin')

@section('content')

    <section class="text-teal font-bold mt-10 text-center text-4xl">
        <p> Contacts </p>
    </section>

    <section class="mt-10 text-smx">
        <table id="dataTable">
            <thead class="text-browngold text-left">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="black">
                @foreach ($contacts as $contact)
                    <tr>
                        <td> {{ ucwords($contact->name) }} </td>
                        <td> {{ $contact->email }} </td>
                        <td> {{ ucwords($contact->phone) }} </td>
                        <td> {{ ucwords($contact->message) }} </td>
                        <td>
                            <a href="{{ url('/admin/contacts/'.$contact->id) }}" class="border border-teal-500 hover:bg-teal-500 icon px-1.5 rounded">
                                <i class="fa fa-eye text-teal-500"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
