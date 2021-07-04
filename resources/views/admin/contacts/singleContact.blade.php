@extends('layouts.admin')

@section('content')

    <section>
        <p class="text-teal font-bold mt-10 text-left text-3xl"> Contact Details </p>
        <div class="bg-white border border-teal-100 mt-10 p-10 rounded">
            <div class="grid grid-cols-3 text-lg">
                <div>
                    <p class="font-bold mb-2 text-base text-teal"> Name </p>
                    <p class="font-semibold text-gray-600"> {{ $contact->name }} </p>
                </div>
                <div>
                    <p class="font-bold mb-2 text-base text-teal"> Email </p>
                    <p class="font-semibold text-gray-600"> {{ $contact->email }} </p>
                </div>
                <div>
                    <p class="font-bold mb-2 text-base text-teal"> Phone Number </p>
                    <p class="font-semibold text-gray-600"> {{ $contact->phone }} </p>
                </div>
            </div>
            <div class="mt-7">
                <p class="font-bold mb-2 text-base text-teal"> Message </p>
                <p class="font-semibold leading-6 text-gray-600"> {{ $contact->message }} </p>
            </div>
        </div>
    </section>

    <section class="mt-32">
        @if ($contact->replied)
            <p class="text-teal font-bold mt-10 text-left text-3xl"> Reply </p>
            <div class="bg-white border border-teal-100 mt-10 p-10 rounded text-lg">
                <div>
                    <p class="font-bold mb-2 text-base text-teal"> Subject </p>
                    <p class="font-semibold text-gray-600"> {{ $contact->subject }} </p>
                </div>
                <div class="mt-7">
                    <p class="font-bold mb-2 text-base text-teal"> Message </p>
                    <p class="font-semibold text-gray-600"> {{ $contact->reply }} </p>
                </div>
            </div>
        @else
            <p class="text-teal font-bold mt-10 text-left text-3xl"> Reply {{ $contact->name }} </p>
            <form action="{{ url('/admin/contacts/reply/'.$contact->id) }}" method="POST" class="mt-5">
                @csrf
                <div>
                    <label for="subject"> Subject </label>
                    <input type="text" id="subject" name="subject" class="block border border-teal-100 focus:outline-none my-2 p-2 rounded w-full" value="{{ old('subject') }}">
                </div>
                <div class="mt-3">
                    <label for="message"> Message </label>
                    <textarea name="message" id="message" cols="30" rows="10" class="block border border-teal-100 focus:outline-none my-2 p-2 rounded w-full">{{ old('message') }}</textarea>
                </div>
                <div class="mt-3">
                    <input type="submit" value="Submit" class="bg-teal-600 px-6 py-2 rounded text-white">
                </div>
            </form>
        @endif
    </section>
@endsection
