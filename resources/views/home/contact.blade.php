@extends('layouts.app')

@section('content')
    <section class="bg-center bg-cover bg-no-repeat flex h-screen items-center justify-center md:h-96 pt-12" style="background-image: url({{ asset('/assets/images/contact.jpg') }}); background-color: rgba(1, 1, 1, 0.5); background-blend-mode: multiply">
        <p class="font-semibold home text-center text-white bebas-neue"> Contact us </p>
    </section>

    <section class="mx-auto my-32 lg:w-2/3 w-10/12">
        <div class="flex flex-col md:flex-row md:space-y-0 justify-center space-y-5 w-full">
            <div class="w-full md:w-1/3">
                <p class="font-semibold text-4xl"> Send me a message</p>
                <p class="my-5 text-md"> <i class="fa fa-envelope-o font-semibold pr-2"></i> lexi@properties.com </p>
                <p class="text-md"> <i class="fa fa-whatsapp font-semibold pr-2"></i> 0900 000 000 </p>
            </div>
            <div class="w-full md:w-2/3">
                <div class="bg-green-200 font-semibold hidden inline-flex items-center mb-3 p-3 rounded space-x-5 text-center text-green-600 w-full" id="greenAlert">
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
