@extends('layouts.admin')

@section('content')

    <section class="dark-ivory font-bold md:px-10 px-5 py-2 text-teal-600 text-left text-xl">
        <p> Edit {{ $property->title }} </p>
    </section>

    <section class="md:px-10 px-5">
        <form action="" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="gap-0 grid grid-cols-1 md:gap-5 md:grid-cols-3 md:space-y-0 mt-20 space-y-8">
                <div class="md:col-span-2">
                    <label class="text-gray-600" for="title"> Title </label>
                    <input type="text" id="title" name="title" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full" value="{{ old('title') ?? $property->title }}" required>
                    @error('title')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-600" for="amount"> Amount </label>
                    <input type="number" name="amount" id="amount" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full" value="{{ old('amount') ?? $property->amount }}" required>
                    @error('amount')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-600" for="measurement"> Measurement </label>
                    <input type="text" id="measurement" name="measurement" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full" value="{{ old('measurement') ?? $property->measurement }}" required>
                    @error('measurement')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="md:col-span-2">
                    <label class="text-gray-600" for="address"> Address </label>
                    <input type="text" id="address" name="address" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full" value="{{ old('address') ?? $property->address }}" required>
                    @error('address')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-600" for="city"> City </label>
                    <input type="text" id="city" name="city" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full" value="{{ old('city') ?? $property->city }}" required>
                    @error('city')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-600" for="state"> State </label>
                    <input type="text" name="state" id="state" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full" value="{{ old('state') ?? $property->state }}" required>
                    @error('state')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-600" for="proximity"> Proximity to choice proximity </label>
                    <input type="text" name="proximity" id="proximity" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full" value="{{ old('proximity') ?? $property->proximity }}" required>
                    @error('proximity')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label for="topography" class="text-gray-600"> Topography </label>
                    <input type="text" name="topography" id="topography" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full" value="{{ old('topography') ?? $property->topography }}" required>
                    @error('topography')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label for="index" class="text-gray-600"> Index Picture </label>
                    <input type="file" name="index" id="index" class="bg-white block border mt-2 px-5 py-3 rounded-lg text-sm w-full" accept=".jpg, .png, .jpeg">
                    @error('index')
                        <p class="text-red-500 text-xs-italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label for="video" class="text-gray-600"> Video </label>
                    <input type="file" name="video" id="video" class="bg-white block border mt-2 px-5 py-3 rounded-lg text-sm w-full" accept="video/mp4, video/x-m4v, video/*">
                    @error('video')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="md:col-span-3">
                    <div id='result' class="gap-3 grid grid-cols-6 mb-2 place-content-center"></div>
                    <label class="text-gray-600" for="files"> Pictures (one or more) </label>
                    <input type="file" name="pictures[]" id="files" class="bg-white block border mt-2 px-5 py-3 rounded-lg ltext-sm w-full" value="{{ old('pictures') }}" multiple accept=".jpg, .png, .jpeg">
                    @error('pictures')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="md:col-span-3">
                    <label class="text-gray-600" for="description"> Description </label>
                    <textarea name="description" id="description" cols="30" rows="10" class="block border leading-6 mt-2 px-5 py-3 rounded-lg text-sm w-full" required>{{ old('description') ?? $property->description }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="md:col-span-3">
                    <label class="text-gray-600" for="payment_plan"> Payment Plan </label>
                    <textarea name="payment_plan" id="payment_plan" cols="30" rows="10" class="block border leading-6 mt-2 px-5 py-3 rounded-lg text-sm w-full" required>{{ old('payment_plan') ?? $property->payment_plan }}</textarea>
                    @error('payment_plan')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <div class="mt-5">
                <input type="submit" value="Edit Property" class="bg-teal-700 border cursor-pointer hover:bg-white hover:border-teal-500 hover:font-semibold hover:text-teal-600 px-8 py-2.5 rounded-md text-sm text-white">
            </div>
        </form>
    </section>

@endsection
