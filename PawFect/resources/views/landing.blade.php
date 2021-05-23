@extends('layouts.landing_layout')
@section('content')

<section class="products" id="products">
    <div class="container py-5">
        <h1 class="text-center"> Shop </h1>



            <div class="row py-5">
                @foreach($PostPet as $pet)
                <div class="col-lg-3">
                    <div class="card mb-2 text-center">
                        <img src=" {{ $pet->PhotoPath }} " class="img-fluid mb-3" alt="">
                        <a href="{{route('post-detail-pets',$pet->id)}}"> <input type="button" value="Details">   </a>
                        <h5>  {{ $pet->PostName }} </h5>
                        <p class="mb-2"><small>  {{$pet->Price }}</small></p>
                    </div>
                </div>

        @endforeach
            </div>







</div>
</section>
@endsection


