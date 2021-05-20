@extends('layouts.app')

@section('content')
    <section class="h-screen flex justify-center items-center" style="background-image: url({{ asset('/assets/one.jpg') }})">
        <p class="font-semibold text-white text-6xl" id="bebas-neue"> Let's Get You Home </p>
    </section>

    <section>
        <div class="flex h-36 items-center justify-center">
            <p class="font-semibold text-white text-4xl"> Quick Search</p>
        </div>
        <form action="">

        </form>
    </section>

    <section class="h-screen" style="background-image: url({{ asset('/assets/two.jpg') }})">
        <div class="flex justify-center items-center">
            <p class="font-bold text-white text-5xl"> FOR SALE!</p>
        </div>
    </section>

    <section class="flex items-center justify-center">
        <div>
            <img src="" alt="">
        </div>
        <div>
            <p class="font-semibold text-3xl"> AGENT'S NOTE </p>
            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui debitis beatae provident fugit voluptatibus? Atque iusto quidem consectetur distinctio dignissimos, architecto tenetur! Alias repudiandae dolores aliquid laboriosam laborum distinctio accusantium? </p>
        </div>
    </section>

    <section class="grid grid-cols-3">
        <div>
            <img src="" alt="">
            <p class="text-gray"> Ajah | Lagos </p>
        </div>
    </section>

    <section>
        <div class="flex items-center justify-center">
            <p class="text-3xl"> Send me a message</p>
        </div>
        <div>
            <form action=""></form>
        </div>
    </section>
@endsection
