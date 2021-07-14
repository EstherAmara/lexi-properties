@extends('layouts.admin')

@section('content')

    <section class="dark-ivory font-bold md:px-10 px-5 py-2 text-teal-600 text-left text-xl">
        <p> Your Personal Information </p>
    </section>

    <section class="md:px-10 mt-20">
        <form action="{{ url('/admin/settings') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="bg-white p-8">
                <p class="font-bold mb-5 text-2xl text-gray-700"> About Us page </p>
                <div class="space-y-5">
                    <div>
                        <label for="about_first" class="text-gray-600">First Paragraph</label>
                        <textarea name="about_first" id="about_first" cols="30" rows="10" class="block border leading-6 mt-2 px-5 py-3 rounded-lg text-lg text-sm w-full">{{ old('about_first') ?? $settings ? $settings->about_first : '' }}</textarea>
                        @error('about_first')
                            {{ $message }}
                        @enderror
                    </div>
                    <div>
                        <label for="about_second" class="text-gray-600">Second Paragraph</label>
                        <textarea name="about_second" id="about_second" cols="30" rows="10" class="block border leading-6 mt-2 px-5 py-3 rounded-lg text-lg text-sm w-full">{{ old('about_second') ?? $settings ?$settings->about_second : '' }}</textarea>
                        @error('about_second')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="bg-white mt-20 p-10">
                <p class="font-bold mb-5 text-2xl text-gray-700"> Profile Image </p>
                <div>
                    <input type="file" name="image" id="image" class="bg-white block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                </div>
            </div>

            <div class="bg-white mt-20 p-10">
                <p class="font-bold mb-5 text-2xl text-gray-700"> Agent's Note </p>
                <div>
                    <textarea name="agent_note" id="agent_note" cols="30" rows="10" class="block border leading-6 mt-2 px-5 py-3 rounded-lg text-lg text-sm w-full">{{ old('agents_note') ?? $settings ? $settings->agents_note : ''}}</textarea>
                </div>
            </div>

            <div class="bg-white mt-20 p-10">
                <p class="font-bold mb-5 text-2xl text-gray-700"> Media Information </p>
                <div class="gap-5 grid grid-cols-1 md:grid-cols-3">
                    <div>
                        <label for="phone" class="text-gray-600"> Phone number </label>
                        <input type="text" name="phone" value="{{ old('phone') ?? ($settings ? $settings->phone : '') }}" class="bg-white block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                        @error('phone')
                            {{ $message }}
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="text-gray-600"> Email address </label>
                        <input type="text" name="email" value="{{ old('email') ?? ($settings ? $settings->email : '') }}" class="bg-white block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>

                    <div>
                        <label for="whatsapp" class="text-gray-600"> WhatsApp number </label>
                        <input type="text" name="whatsapp" value="{{ old('whatsapp') ?? ($settings ? $settings->whatsapp : '') }}" class="bg-white block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                        @error('whatsapp')
                            {{ $message }}
                        @enderror
                    </div>
                    <div>
                        <label for="facebook" class="text-gray-600"> Facebook link </label>
                        <input type="text" name="facebook" value="{{ old('facebook') ?? ($settings ? $settings->facebook : '') }}" class="bg-white block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                        @error('facebook')
                            {{ $message }}
                        @enderror
                    </div>

                    <div>
                        <label for="instagram" class="text-gray-600"> Instagram link </label>
                        <input type="text" name="instagram" value="{{ old('instagram') ?? ($settings ? $settings->instagram : '') }}" class="bg-white block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                        @error('instagram')
                            {{ $message }}
                        @enderror
                    </div>

                    <div>
                        <label for="youtube" class="text-gray-600"> YouTube link </label>
                        <input type="text" name="youtube" value="{{ old('youtube') ?? ($settings ? $settings->youtube : '') }}" class="bg-white block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                        @error('youtube')
                            {{ $message }}
                        @enderror
                    </div>

                    <div>
                        <label for="twitter" class="text-gray-600"> Twitter link </label>
                        <input type="text" name="twitter" value="{{ old('twitter') ?? ($settings ? $settings->twitter : '') }}" class="bg-white block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                        @error('twitter')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="address" class="text-gray-600"> Work Address </label>
                        <input type="text" name="address" value="{{ old('address') ?? ($settings ? $settings->address : '') }}" class="bg-white block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                        @error('address')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-20 mb-32 pr-8">
                <input type="submit" value="Update Details" class="bg-peachy cursor-pointer font-semibold px-6 py-3 rounded text-md text-white">
            </div>
        </form>
    </section>

@endsection
