@extends('layouts.app')

@section('content')
    <section class="h-screen flex justify-center items-center" style="background-image: url({{ asset('/assets/one.jpg') }})">
        <p class="font-semibold home text-white bebas-neue"> Let's Get You Home </p>
    </section>

    <section class="mx-auto my-32 w-2/3">
        <div class="bg-center bg-cover bg-no-repeat flex h-44 items-center justify-center py-10 w-full" style="background-image: url({{ asset('/assets/two.jpg') }})">
            <p class="font-semibold text-white text-5xl t-shadow"> - Quick Search - </p>
        </div>
        <form action="">
            <div class="bg-white border flex items-center mt-6 pl-2 rounded space-x-1 w-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="gray">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                  </svg>
                <input type="text" class="bg-transparent focus:outline-none py-2 w-full" placeholder="Location">
            </div>
            <div class="flex mt-2 space-x-3 w-full">
                <div class="bg-white border flex items-center pl-2 rounded space-x-1 w-1/2">
                    <p class="font-bold text-gray-500 text-lg"> &#8358; </p>
                    <input type="text" class="bg-transparent focus:outline-none py-2 text-lg w-full" placeholder="Minimum Price">
                </div>
                <div class="bg-white border flex items-center pl-2 rounded space-x-1 w-1/2">
                    <p class="font-bold text-gray-500 text-lg"> &#8358; </p>
                    <input type="text" class="bg-transparent focus:outline-none py-2 text-lg w-full" placeholder="Maximum Price">
                </div>
            </div>
            <input type="submit" value="Search" class="bg-peach mt-4 pb-2.5 pt-2 px-8 rounded text-lg text-white">
        </form>
    </section>

    <section class="h-screen" style="background-image: url({{ asset('/assets/two.jpg') }})">
        <div class="flex h-full justify-center items-center">
            <p class="font-bold text-white text-5xl"> FOR SALE!</p>
        </div>
    </section>

    <section class="flex items-center justify-center mx-auto my-32 space-x-10 w-2/3">
        <div class="h-96">
            <img src="{{ asset('/assets/girl.jpg') }}" alt="" class="h-full object-center object-cover w-full">
        </div>
        <div>
            <p class="mb-5 text-5xl bebas-neue"> AGENT'S NOTE </p>
            <p class="agent-note"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui debitis beatae provident fugit voluptatibus? Atque iusto quidem consectetur distinctio dignissimos, architecto tenetur! Alias repudiandae dolores aliquid laboriosam laborum distinctio accusantium? </p>
        </div>
    </section>

    <section class="mx-auto my-32 w-2/3">
        <div class="flex justify-end mb-2">
            <a href="#" class="bg-teal px-6 py-2 rounded text-white"> View All Properties </a>
        </div>
        <div class="gap-4 grid grid-cols-3">
            <div class="box-shadow">
                <img src="{{ asset('/assets/three.jpg') }}" alt="" class="h-56 object-center object-cover w-full">
                <p class="py-4 text-center text-gray text-gray-600"> Ajah | Lagos </p>
            </div>
            <div class="box-shadow">
                <img src="{{ asset('/assets/four.jpg') }}" alt="" class="h-56 object-center object-cover w-full">
                <p class="py-4 text-center text-gray text-gray-600"> Ajah | Lagos </p>
            </div>
            <div class="box-shadow">
                <img src="{{ asset('/assets/one.jpg') }}" alt="" class="h-56 object-center object-cover w-full">
                <p class="py-4 text-center text-gray text-gray-600"> Ajah | Lagos </p>
            </div>
            <div class="box-shadow">
                <img src="{{ asset('/assets/five.jpg') }}" alt="" class="h-56 object-center object-cover w-full">
                <p class="py-4 text-center text-gray text-gray-600"> Ajah | Lagos </p>
            </div>
            <div class="box-shadow">
                <img src="{{ asset('/assets/two.jpg') }}" alt="" class="h-56 object-center object-cover w-full">
                <p class="py-4 text-center text-gray text-gray-600"> Ajah | Lagos </p>
            </div>
            <div class="box-shadow">
                <img src="{{ asset('/assets/four.jpg') }}" alt="" class="h-56 object-center object-cover w-full">
                <p class="py-4 text-center text-gray text-gray-600"> Ajah | Lagos </p>
            </div>
        </div>
    </section>

    <section class="mx-auto my-32 w-2/3">
        <div class="flex justify-center w-full">
            <div class="w-1/3">
                <p class="font-semibold text-4xl"> Send me a message</p>
                <p class="my-5 text-md"> <i class="fa fa-envelope-o font-semibold pr-2"></i> lexi@properties.com </p>
                <p class="text-md"> <i class="fa fa-whatsapp font-semibold pr-2"></i> 0900 000 000 </p>
            </div>
            <div class="w-2/3">
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
