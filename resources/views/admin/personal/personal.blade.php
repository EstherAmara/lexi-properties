@extends('layouts.admin')

@section('content')

    <section class="dark-ivory font-bold px-8 py-2 text-teal-600 text-left text-xl">
        <p> Your Personal Information </p>
    </section>

    <section class="px-8 mt-20">
        <form action="" method="POST">
            <div>
                <p> About Us page </p>
                <div>
                    <label for="about_first">First Paragraph</label>
                    <textarea name="about_first" id="about_first" cols="30" rows="10">{{ old('about_first') ?? $settings->about_first }}</textarea>
                    @error('about_first')
                        {{ $message }}
                    @enderror
                </div>
                <div>
                    <label for="about_second">Second Paragraph</label>
                    <textarea name="about_second" id="about_second" cols="30" rows="10">{{ old('about_second') ?? $settings->about_second }}</textarea>
                    @error('about_second')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div>
                <p> Profile Image </p>
                <div>
                    <input type="file" name="image" id="image">
                </div>
            </div>

            <div>
                <p> Agent's Note </p>
                <div>
                    <textarea name="agent_note" id="agent_note" cols="30" rows="10">{{ old('agent_note') ?? $settings->agent_note}}</textarea>
                </div>
            </div>

            <div>
                <p> Social Media Information </p>
                <div>
                    <div>
                        <label for="facebook"> Facebook link </label>
                        <input type="text" name="facebook">
                        @error('facebook')
                            {{ $message }}
                        @enderror
                    </div>

                    <div>
                        <label for="instagram"> Instagram link </label>
                        <input type="text" name="instagram">
                        @error('instagram')
                            {{ $message }}
                        @enderror
                    </div>

                    <div>
                        <label for="whatsapp"> WhatsApp number </label>
                        <input type="text" name="whatsapp">
                        @error('whatsapp')
                            {{ $message }}
                        @enderror
                    </div>

                    <div>
                        <label for="twitter"> Twitter link </label>
                        <input type="text" name="twitter">
                        @error('twitter')
                            {{ $message }}
                        @enderror
                    </div>

                    <div>
                        <label for="youtube"> YouTube link </label>
                        <input type="text" name="youtube">
                        @error('youtube')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection
