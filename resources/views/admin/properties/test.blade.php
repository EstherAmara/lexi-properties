@extends('layouts.app')

@section('content')
<section class="mx-auto my-24 lg:w-2/3 w-10/12">
    <div class="your-class">
        <div>your content</div>
        <div>your content</div>
        <div>your content</div>
      </div>
</section>

<script>
$(document).ready(function(){
            $('.your-class').slick();
        });
</script>
@endsection
