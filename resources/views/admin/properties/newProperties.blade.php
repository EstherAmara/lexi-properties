@extends('layouts.admin')

@section('content')

    <section class="mt-10">
        <p class="text-teal font-bold text-4xl"> Add New Listing </p>
    </section>

    <style>
        .box__dragndrop,
        .box__uploading,
        .box__success,
        .box__error {
            display: none;
        }
        /* .box.has-advanced-upload {
            background-color: white;
            outline: 2px dashed black;
            outline-offset: -10px;
        }
        .box.has-advanced-upload .box__dragndrop {
            display: inline;
        } */
    </style>

    <section class="my-24">
        <form class="box" method="post" action="" enctype="multipart/form-data">
            <div class="box__input">
              <input class="box__file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
              <label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.</label>
              <button class="box__button" type="submit">Upload</button>
            </div>
            <div class="box__uploading">Uploading…</div>
            <div class="box__success">Done!</div>
            <div class="box__error">Error! <span></span>.</div>
        </form>
    </section>

    {{-- <section>
        <form action="" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="gap-0 grid grid-cols-1 md:gap-5 md:grid-cols-3 md:space-y-0 mt-10 space-y-8">
                <div>
                    <label class="text-gray-600" for="title"> Title </label>
                    <input type="text" id="title" name="title" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full" required value="{{ old('title') }}">
                    @error('title')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-600" for="amount"> Amount </label>
                    <input type="number" name="amount" id="amount" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full" required value="{{ old('amount') }}">
                    @error('amount')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-600" for="measurement"> Measurement </label>
                    <input type="text" id="measurement" name="measurement" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full" required value="{{ old('measurement') }}">
                    @error('measurement')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-600" for="address"> Address </label>
                    <input type="text" id="address" name="address" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full" required value="{{ old('address') }}">
                    @error('address')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-600" for="city"> City </label>
                    <input type="text" id="city" name="city" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full" required value="{{ old('city') }}">
                    @error('city')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-600" for="state"> State </label>
                    <input type="text" name="state" id="state" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full" required value="{{ old('state') }}">
                    @error('state')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="md:col-span-2">
                    <label class="text-gray-600" for="proximity"> Proximity to choice proximity </label>
                    <input type="text" name="proximity" id="proximity" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full" required value="{{ old('proximity') }}">
                    @error('proximity')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label for="topography" class="text-gray-600"> Topography </label>
                    <input type="text" name="topography" id="topography" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full" required value="{{ old('topography') }}">
                    @error('topography')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="md:col-span-3">
                    <label class="text-gray-600" for="description"> Description </label>
                    <textarea name="description" id="description" cols="30" rows="10" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full" required>{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="md:col-span-3">
                    <label class="text-gray-600" for="payment_plan"> Payment Plan </label>
                    <textarea name="payment_plan" id="payment_plan" cols="30" rows="10" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full" required>{{ old('payment_plan') }}</textarea>
                    @error('payment_plan')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="md:col-span-3">
                    <label class="text-gray-600" for="pictures"> Pictures </label>
                    <input type="file" name="pictures" id="pictures" class="bg-white block border mt-2 px-5 py-3 rounded-lg ltext-sm w-full" required value="{{ old('pictures') }}">
                    @error('pictures')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <div class="mt-5">
                <input type="submit" value="Submit" class="bg-teal-700 border cursor-pointer hover:bg-white hover:border-teal-500 hover:font-semibold hover:text-teal-600 px-8 py-2.5 rounded-md text-sm text-white">
            </div>
        </form>
    </section> --}}

    <script>
        var isAdvancedUpload = function() {
            var div = document.createElement('div');
            return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;
        }();

        console.log(isAdvancedUpload);
        var $form = document.querySelector('.box');

        if (isAdvancedUpload) {
            $form.classList.add('has-advanced-upload');
        }
    </script>
@endsection
