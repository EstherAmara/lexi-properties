@extends('layouts.app')

@section('content')
    <section class="bg-t-black h-screen flex justify-center items-center" style="background-image: url({{ asset('/assets/images/one.jpg') }})">
        <p class="font-semibold home text-white text-center bebas-neue"> Let's Get You Home </p>
    </section>

    <section class="mx-auto my-32 lg:w-2/3 w-10/12">
        <div class="bg-center bg-cover bg-no-repeat flex h-44 items-center justify-center py-10 w-full" style="background-image: url({{ asset('/assets/images/two.jpg') }})">
            <p class="font-semibold t-shadow text-4xl lg:text-5xl text-center text-white"> - Quick Search - </p>
        </div>
        <form action="{{ url('/quick-search') }}" method="POST">
            @csrf
            <div class="bg-white border flex items-center mt-6 pl-2 rounded space-x-1 w-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="gray">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                  </svg>
                <input type="text" name="location" class="bg-transparent focus:outline-none py-2 w-full" placeholder="Location" required>
                @error('location')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="flex flex-col lg:flex-row lg:space-x-3 lg:space-y-0 mt-2 space-x-0 space-y-2 w-full">
                <div class="bg-white border flex items-center pl-2 rounded space-x-1 w-full lg:w-1/2">
                    <p class="font-bold text-gray-500 text-lg"> &#8358; </p>
                    <input type="text" name="minPrice" class="bg-transparent focus:outline-none py-2 text-lg w-full" placeholder="Minimum Price" required>
                    @error('minPrice')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="bg-white border flex items-center pl-2 rounded space-x-1 w-full lg:w-1/2">
                    <p class="font-bold text-gray-500 text-lg"> &#8358; </p>
                    <input type="text" name="maxPrice" class="bg-transparent focus:outline-none py-2 text-lg w-full" placeholder="Maximum Price" required>
                    @error('maxPrice')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <input type="submit" value="Search" class="bg-peach cursor-pointer mt-4 pb-2.5 pt-2 px-8 rounded text-lg text-white">
        </form>
    </section>

    @if ($indexProperty)
        <section class="h-screen bg-center bg-cover bg-no-repeat bg-t-black" style="background-image: url({{ asset($indexProperty->pictures) }})">
            <div class="flex flex-col h-full justify-center items-center space-y-10">
                <p class="font-bold text-white text-5xl"> FOR SALE!</p>
                <div class="flex flex-col items-center space-y-5">
                    <p class="font-bold text-white text-4xl">{{ $indexProperty->title }}</p>
                    <a href="{{ url('/properties/'.$indexProperty->slug) }}" class="bg-teal px-4 py-2 rounded-xl text-center text-white"> View Property</a>
                </div>
            </div>
        </section>
    @endif

    @if ($settings && $settings->agents_note)
        <section class="flex flex-col-reverse items-center justify-center lg:w-2/3 md:flex-row md:space-x-10 mx-auto my-32 space-x-0 w-10/12">
            <div class="h-96 w-1/3">
                <img src="{{ asset($settings->image) }}" alt="" class="h-full object-center object-cover w-full">
            </div>
            <div class="w-2/3 whitespace-pre-wrap">
                <p class="bebas-neue mb-5 text-center text-5xl"> AGENT'S NOTE </p>
                <p class="agent-note border-0 border-gray-800 lg:px-6 md:border-l md:px-6 px-0 py-10"> {{ $settings->agents_note ?? '' }} </p>
            </div>
        </section>
    @endif

    <section class="flex flex-col-reverse lg:w-2/3 md:flex-col md:space-y-0 mx-auto my-32 space-y-5 space-y-reverse w-10/12">
        <div class="flex justify-center md:justify-end mb-2">
            <a href="{{ url('/properties') }}" class="bg-teal px-6 py-2 rounded text-white"> View All Properties </a>
        </div>
        <div class="gap-0 grid grid-cols-1 md:grid-cols-2 md:gap-4 lg:grid-cols-3">
            @foreach ($allProperties as $property)
                <div class="bg-white box-shadow">
                    <a href="{{ url('/properties/'.$property->slug) }}">
                        <img src="{{ asset($property->index_image) }}" alt="" class="h-52 object-center object-cover rounded-br-full w-full">
                        <div class="px-3 py-2 text-gray-600 text-xs">
                            <p class="text-sm font-bold"> {{ $property->title }} </p>
                            <p class="py-2.5"> <i class="fa fa-map-marker"></i> {{ $property->city }}, {{ $property->state }} </p>
                            <div class="flex justify-between">
                                <p>{{ $property->measurement }}</p>
                                <p>₦{{ number_format($property->amount) }}</p>
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
                <p class="font-semibold text-4xl"> Send us a message</p>
                @if ($settings)
                    @if ($settings->email)
                        <a href="mailto:{{ $settings->email}}" class="block my-5 text-md"> <i class="fa fa-envelope-o font-semibold pr-2"></i> {{ $settings->email}} </a>
                    @endif
                    @if ($settings->phone)
                        <p class="text-md"> <i class="fa fa-phone font-semibold pr-2"></i> {{ $settings->phone}} </p>
                    @endif
                    @if ($settings->whatsapp)
                        <a href="https://wa.me/+{{ $whatsapp }}" class="block my-5 text-md"> <i class="fa fa-whatsapp font-semibold pr-2"></i> {{ $settings->whatsapp}} </a>
                    @endif
                @endif
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

        $('main').click( function(e) {
            console.log('hello');
        })

        console.log('hello');

    </script>
@endsection
