@extends('layouts.login_layout')
@section('content')


                <form action="{{route('user.login')}}" method="post">
                    @csrf
                    <p> Dont have an account yet? <a href="{{route('user.registration')}}"> Sign Up</a></p>
                    <div class="form-row">
                        <div class="col-lg-8 ">
                            <input type="email" placeholder="Email Address" class="form-control my-3 p-3" name="login_email" >

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-8">
                            <input type="password" placeholder="*******" class="form-control  my-3 p-3" name="login_password">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-8">
                            <button type="submit" class="btn1"> Log In </button>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                    @endforeach
                                    @endif
                                </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-8 my-3 pb-5">
                                <a href="#"> Forgot password? </a>
                            </div>
                        </div>


                </form>


@endsection

