@extends('layouts.admin')

@section('content')

    <section class="mt-10">
        <p class="text-teal font-bold text-4xl"> Add New Listing </p>
    </section>

    <section>
        <form action="" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="gap-5 grid grid-cols-3 mt-10">
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

                <div class="col-span-2">
                    <label class="text-gray-600" for="proximity"> Proximity to choice proximity </label>
                    <input type="text" name="proximity" id="location" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                </div>

                <div>
                    <label for="topography" class="text-gray-600"> Topography </label>
                    <input type="text" name="topography" id="topography" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full">
                </div>

                <div class="col-span-3">
                    <label class="text-gray-600" for="description"> Description </label>
                    <textarea name="description" id="description" cols="30" rows="10" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full"></textarea>
                </div>

                <div class="col-span-3">
                    <label class="text-gray-600" for="payment_plan"> Payment Plan </label>
                    <textarea name="payment_plan" id="payment_plan" cols="30" rows="10" class="block border mt-2 px-5 py-3 rounded-lg text-sm w-full"></textarea>
                </div>

                <div class="col-span-3">
                    <label class="text-gray-600" for="pictures"> Pictures </label>
                    <input type="file" name="pictures" id="pictures" class="bg-white block border mt-2 px-5 py-3 rounded-lg ltext-sm w-full">
                </div>
            </div>
            <div class="mt-5">
                <input type="submit" value="Submit" class="bg-teal-700 border cursor-pointer hover:bg-white hover:border-teal-500 hover:font-semibold hover:text-teal-600 px-8 py-2.5 rounded-md text-sm text-white">
            </div>
        </form>
    </section>

@endsection
