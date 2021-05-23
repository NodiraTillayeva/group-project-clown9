@extends('layouts.admin_layout')
@section('content')

@foreach($UsersPosts as $post)
    <section class="favorites" >
        <div class="container py-5">
            <div class="card mb-1 p-3 text-center "  style="background-color: #F1A93D;">
                <h5 class="text-center text-white">  </h5>
                <div class="row py-2">
                    <div class="col-lg-1">
                        <div class="card mb-1 text-center">
                            <img src="{{$post['PhotoPath']}}" class="img-fluid mb-3" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card mb-1 text-center">
                            <p> Name</p>
                            <p><small> {!! $post['FullName'] !!}</small></p>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="card mb-1 text-center">
                            <p> Login</p>
                            <p><small> {!! $post['Username'] !!}</small></p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card mb-1 text-center">
                            <p> Email </p>
                            <p><small> {!! $post['email'] !!}</small></p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card mb-1 text-center">
                            <p> Phone Number </p>
                            <p><small> {!! $post['PhoneNumber'] !!}</small></p>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="card mb-1 text-center">
                            <p> Bday </p>
                            <p><small> {!! $post['PhoneNumber'] !!}</small></p>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="card mb-1 text-center">
                            <p>Passport</p>
                            <p><small> {!! $post['Passport'] !!}</small></p>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="card mb-1 text-center">
                            <p> Postal</p>
                            <p><small> {!! $post['PostalCode'] !!}</small></p>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="card mb-1 text-center">
                            <p> City </p>
                            <p><small> {!! $post['City'] !!}</small></p>
                        </div>
                    </div>
                </div>
                <h5 class="text-center text-white"> Products </h5>

                <div class="row py-1">

                    @foreach($UsersPets as $pet)

                        @if($pet['SiteUsers_id'] === $post['id'])

                            <div class="col-lg-3">
                                <div class="card mb-1 text-center">
                                    <img src="{{$pet['PhotoPath']}}" class="img-fluid mb-3" alt="">
                                    <a href="{{route('admin-detail-pets',$pet->id)}}"> <input type="button" value="Details">   </a>
                                    <form method="post" action="admin/delete">
                                        @csrf
                                        <input name="UsrID" type="hidden" value="{{$pet['id']}}"/>
                                        <button class="btn btn-outline-success" type="submit">delete</button>

                                    </form>
                                    <h5> {!! $pet['PostName'] !!} </h5>
                                    <p class="mb-2"><small>{!! $pet['Price'] !!}</small></p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endforeach

@endsection
