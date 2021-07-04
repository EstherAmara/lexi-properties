@extends('layouts.admin')

@section('content')

    <section class="mt-10">
        <div class="gap-10 grid grid-cols-3 text-center">
            <a href="{{ url('/admin/contacts') }}" class="contacts-box text-lg">
                <p class="mb-3">{{ $numberOfContacts }}</p>
                <p> CONTACTS </p>
            </a>
            <a href="{{ url('/admin/inspections') }}" class="inspections-box text-lg">
                <p class="mb-3">{{ $numberOfInspections }}</p>
                <p> INSPECTIONS </p>
            </a>
            <a href="{{ url('/admin/properties') }}" class="properties-box text-lg">
                <p class="mb-3">{{ $numberOfProperties }}</p>
                <p> PROPERTIES </p>
            </a>
        </div>
    </section>

    <section class="mt-10">
        <div class="gap-8 grid grid-cols-2">

        </div>
    </section>

@endsection
