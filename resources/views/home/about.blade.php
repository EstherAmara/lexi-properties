@extends('layouts.app')

@section('content')

    <section class="bg-top bg-cover bg-no-repeat bg-t-black flex h-screen items-center justify-center md:h-96 pt-16" style="background-image: url({{ asset('/assets/images/about-us.jpg') }})">
        <p class="font-semibold home text-center text-white bebas-neue"> About Us </p>
    </section>

    <section class="mx-auto my-24 lg:w-2/3 w-10/12">
        <div class="flex space-x-5">
            <div class="agent-note flex flex-col space-y-5 w-2/3">
                <div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos dicta nihil vitae excepturi voluptas explicabo quod neque vero, porro voluptatibus quidem aspernatur, voluptatem, blanditiis odio amet repellendus sunt facilis cupiditate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ipsum, dolores repellat officiis dignissimos deserunt, modi eos culpa unde vitae fugit beatae illum odit, ut quasi quis deleniti vel esse. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde corrupti dolorum voluptates, possimus odit inventore quam eaque blanditiis mollitia perferendis, officia obcaecati! Suscipit accusamus, tempore pariatur quaerat illo veniam ad.
                </div>
                <div>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis tempore nam ea laborum, reprehenderit sit, reiciendis dolorum provident quod cum quae quas corrupti assumenda aperiam sed quibusdam recusandae voluptatum velit? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima nemo consectetur suscipit ab quam ipsum harum deserunt obcaecati quasi, voluptatibus itaque mollitia sunt asperiores eos accusamus, earum a ea culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla dolorum delectus commodi unde architecto quidem dignissimos eos rem excepturi ipsa quis quisquam consectetur deleniti a, sint ratione maxime. Nostrum, nemo? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo ad nobis, laborum veniam molestias accusamus rerum at ea nihil voluptatum cum dicta, voluptate, ullam cupiditate error odit iusto accusantium deserunt.
                </div>
            </div>
            <div class="max-h-96 w-1/3">
                <img src="{{ asset('/assets/images/girl.jpg') }}" alt="" class="h-full object-center object-cover w-full">
            </div>
        </div>
    </section>

@endsection
