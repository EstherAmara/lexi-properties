@extends('layouts.app')

@section('content')
    <section class="h-screen flex justify-center items-center" style="background-image: url({{ asset('/assets/images/one.jpg') }})">
        <p class="font-semibold home text-white text-center bebas-neue"> Let's Get You Home </p>
    </section>

    <section class="mx-auto my-32 lg:w-2/3 w-10/12">
        <div class="bg-center bg-cover bg-no-repeat flex h-44 items-center justify-center py-10 w-full" style="background-image: url({{ asset('/assets/images/two.jpg') }})">
            <p class="font-semibold t-shadow text-4xl lg:text-5xl text-center text-white"> - Quick Search - </p>
        </div>
        <form action="">
            <div class="bg-white border flex items-center mt-6 pl-2 rounded space-x-1 w-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="gray">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                  </svg>
                <input type="text" class="bg-transparent focus:outline-none py-2 w-full" placeholder="Location">
            </div>
            <div class="flex flex-col lg:flex-row lg:space-x-3 lg:space-y-0 mt-2 space-x-0 space-y-2 w-full">
                <div class="bg-white border flex items-center pl-2 rounded space-x-1 w-full lg:w-1/2">
                    <p class="font-bold text-gray-500 text-lg"> &#8358; </p>
                    <input type="text" class="bg-transparent focus:outline-none py-2 text-lg w-full" placeholder="Minimum Price">
                </div>
                <div class="bg-white border flex items-center pl-2 rounded space-x-1 w-full lg:w-1/2">
                    <p class="font-bold text-gray-500 text-lg"> &#8358; </p>
                    <input type="text" class="bg-transparent focus:outline-none py-2 text-lg w-full" placeholder="Maximum Price">
                </div>
            </div>
            <input type="submit" value="Search" class="bg-peach mt-4 pb-2.5 pt-2 px-8 rounded text-lg text-white">
        </form>
    </section>

    <section class="h-screen" style="background-image: url({{ asset('/assets/images/two.jpg') }})">
        <div class="flex h-full justify-center items-center">
            <p class="font-bold text-white text-5xl"> FOR SALE!</p>
        </div>
    </section>

    <section class="flex flex-col-reverse items-center justify-center lg:w-2/3 md:flex-row md:space-x-10 mx-auto my-32 space-x-0 w-10/12">
        <div class="h-96">
            <img src="{{ asset('/assets/images/girl.jpg') }}" alt="" class="h-full object-center object-cover w-full">
        </div>
        <div>
            <p class="bebas-neue mb-5 text-center text-5xl"> AGENT'S NOTE </p>
            <p class="agent-note border-0 border-gray-800 lg:px-6 md:border-l md:px-6 px-0 py-10"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui debitis beatae provident fugit voluptatibus? Atque iusto quidem consectetur distinctio dignissimos, architecto tenetur! Alias repudiandae dolores aliquid laboriosam laborum distinctio accusantium? </p>
        </div>
    </section>

    <section class="flex flex-col-reverse lg:w-2/3 md:flex-col md:space-y-0 mx-auto my-32 space-y-5 space-y-reverse w-10/12">
        <div class="flex justify-center md:justify-end mb-2">
            <a href="{{ url('/properties') }}" class="bg-teal px-6 py-2 rounded text-white"> View All Properties </a>
        </div>
        <div class="gap-0 grid grid-cols-1 md:grid-cols-2 md:gap-4 ">
            @foreach ($allProperties as $property)
                <div class="bg-white box-shadow">
                    <a href="{{ url('/admin/properties/single') }}">
                        <img src="{{ asset($property->pictures) }}" alt="" class="h-52 object-center object-cover rounded-br-full w-full">
                        <div class="px-3 py-2 text-gray-600 text-xs">
                            <p class="text-sm font-bold"> {{ $property->title }} </p>
                            <p class="py-2.5"> <i class="fa fa-map-marker"></i> {{ $property->city }}, {{ $property->state }} </p>
                            <div class="flex justify-between">
                                <p>{{ $property->measurement }}</p>
                                <p>₦{{ $property->amount }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <section class="mx-auto my-32 lg:w-2/3 w-10/12">
        <div class="flex flex-col justify-center lg:flex-row lg:space-y-0 space-y-5 w-full">
            <div class="lg:w-1/3 w-full">
                <p class="font-semibold text-4xl"> Send me a message</p>
                <p class="my-5 text-md"> <i class="fa fa-envelope-o font-semibold pr-2"></i> lexi@properties.com </p>
                <p class="text-md"> <i class="fa fa-whatsapp font-semibold pr-2"></i> 0900 000 000 </p>
            </div>
            <div class="lg:w-2/3 w-full">
                <div class="bg-green-200 font-semibold hidden inline-flex items-center justify-between mb-3 p-3 rounded space-x-5 text-center text-green-600" id="greenAlert">
                    <span class="border-2 border-green-400 cursor-pointer px-1 py-0.5 rounded-full text-green-400 text-xs" id="close"><i class="fa fa-close"></i></span>
                    <p> Your message was sent successfully </p>
                </div>
                <form action="" id="main">
                    <input type="text" placeholder="Name" name="name" class="block border border-red-50 focus:outline-none mb-2 p-2 rounded w-full">
                    <input type="text" placeholder="Email" name="email" class="block border border-red-50 focus:outline-none mb-2 p-2 rounded w-full">
                    <input type="text" placeholder="Phone" name="phone" class="block border border-red-50 focus:outline-none mb-2 p-2 rounded w-full">
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Message" class="block p-2 w-full"></textarea>
                    <input type="submit" value="Search" class="bg-peach cursor-pointer mt-4 pb-2.5 pt-2 px-8 rounded text-lg text-white">
                </form>
            </div>
        </div>
    </section>
    <script>

        $(document).ready(function () {
            // Listen to submit event on the <form> itself!
                function getFormData($form) {
                    var unindexed_array = $form.serializeArray();
                    var indexed_array = {};

                    $.map(unindexed_array, function(n, i){
                        indexed_array[n['name']] = n['value'];
                    });

                    return indexed_array;
                }

            $('#main').submit(function (e) {

                // Prevent form submission which refreshes page
                e.preventDefault();

                // Serialize data
                var $form = $(this);
                var formData = getFormData($form);

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: `{{ url('/contact') }}`,
                    method: 'POST',
                    type: 'POST',
                    data: {formData},
                    success: function(data) {
                        $('#main')[0].reset();
                        $('#greenAlert').removeClass('hidden');
                    },
                    error: function(xmlHttpRequest, status, errorThrown) {
                        alert(errorThrown);
                        console.log('error', errorThrown);
                    }
                })

            });
        });

        $('#greenAlert').click( function(e) {
            $('#greenAlert').addClass('hidden');
        })

    </script>
@endsection
