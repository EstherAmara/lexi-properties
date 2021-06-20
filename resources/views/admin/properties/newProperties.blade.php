@extends('layouts.admin')

@section('content')

    <section class="mt-10">
        <p class="text-teal font-bold text-4xl"> Add New Listing </p>
    </section>

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
                    <input type="text" id="title" name="title" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                </div>

                <div>
                    <label class="text-gray-600" for="amount"> Amount </label>
                    <input type="number" name="amount" id="amount" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                </div>

                <div>
                    <label class="text-gray-600" for="measurement"> Measurement </label>
                    <input type="text" id="measurement" name="measurement" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                </div>

                <div>
                    <label class="text-gray-600" for="address"> Address </label>
                    <input type="text" id="address" name="address" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                </div>

                <div>
                    <label class="text-gray-600" for="city"> City </label>
                    <input type="text" id="city" name="city" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                </div>

                <div>
                    <label class="text-gray-600" for="state"> State </label>
                    <input type="text" name="state" id="state" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                </div>

                <div class="md:col-span-2">
                    <label class="text-gray-600" for="proximity"> Proximity to choice proximity </label>
                    <input type="text" name="proximity" id="location" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                </div>

                <div>
                    <label for="topography" class="text-gray-600"> Topography </label>
                    <input type="text" name="topography" id="topography" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                </div>

                <div class="md:col-span-3">
                    <label class="text-gray-600" for="description"> Description </label>
                    <textarea name="description" id="description" cols="30" rows="10" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full"></textarea>
                </div>

                <div class="md:col-span-3">
                    <label class="text-gray-600" for="payment_plan"> Payment Plan </label>
                    <textarea name="payment_plan" id="payment_plan" cols="30" rows="10" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full"></textarea>
                </div>

                <div class="md:col-span-3">
                    <label class="text-gray-600" for="pictures"> Pictures </label>
                    <input type="file" name="pictures" id="pictures" class="bg-white block border mt-2 px-5 py-3 rounded-lg ltext-sm w-full">
                </div>
            </div>
            <div class="mt-5">
                <input type="submit" value="Submit" class="bg-teal-700 border cursor-pointer hover:bg-white hover:border-teal-500 hover:font-semibold hover:text-teal-600 px-8 py-2.5 rounded-md text-sm text-white">
            </div>
        </form>
    </section> --}}

@endsection
