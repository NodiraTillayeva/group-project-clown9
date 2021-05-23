<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

    <!--  CSS File -->
    <link  href=" {{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

    <!--  Font -->
    <script src="https://kit.fontawesome.com/f4480f95c7.js" crossorigin="anonymous"></script>

    <title>Profile</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid">
        <a class="navbar-brand pl-5" href="{{route('landing-pets') }}"><b>Paw</b>Fect</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon  fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link pr-5" href="#">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<section class="profileParallex py-5">
    <div class="container py-5 text-white text-center">
        <div class="row py-3">
            <div class="col-lg-9 mx-auto">
                <img src="assets/profileavatar.png" class="avatar mb-2">
                <h4 class="text-white">{{$usersdata->FullName}}</h4>
                <h6>{{$usersdata->Username}}</h6>
            </div>
        </div>
    </div>
</section>

<section class="Info">
    <div class="container py-5">
        <h1 class="text-center"> Detailed Information </h1>
        <div class="row py-5">
            <div class="col-lg-2">
                <div class="card mb-1 text-center">
                    <h5> Email </h5>
                    <p><small>{{$usersdata->email}}</small></p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card mb-1 text-center">
                    <h5> Phone Number </h5>
                    <p><small> {{$usersdata->PhoneNumber}}</small></p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card mb-1 text-center">
                    <h5> Date of birth </h5>
                    <p><small>{{$usersdata->DateOfBirth}}</small></p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card mb-1 text-center">
                    <h5>Passport Info</h5>
                    <p><small>{{$usersdata->Passport}}</small></p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card mb-1 text-center">
                    <h5> Postal Code</h5>
                    <p><small>{{$usersdata->PostalCode}}</small></p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card mb-1 text-center">
                    <h5> City </h5>
                    <p><small>{{$usersdata->City}}</small></p>
                </div>
            </div>

        </div>
        </div>

            <a href="{{route('edit-profile',3)}}"> <button class="btn2 m-0">Edit Info</button></a>
        </div>
</section>

<section class="products">
    <form action="/editPost">
    <div class="container py-2">
        <h1 class="text-center"> This person is selling </h1>
        <div class="row py-5">
            @foreach($PostDetails as $posts)
            <div class="col-lg-3">
                <div class="card mb-1 text-center">
                    <img src="assets/products/gal1.png" class="img-fluid mb-3" alt="">
                    <input type="submit" value="Edit"  >
                    <h5> {{$posts->PostName}} </h5>
                    <p class="mb-2"><small> {{$posts->Price}}</small></p>
                </div>
            </div>
            @endforeach

       <!-- <button class="btn2 m-0  mb-3"> Delete Some </button> -->
    </div>
    </div>
    </form>
</section>


<!--<section class="products">
    <div class="container py-2">
        <h1 class="text-center"> Favorites </h1>
        <div class="row py-5">
            <div class="col-lg-3">
                <div class="card mb-1 text-center">
                    <img src="assets/products/gal1.png" class="img-fluid mb-3" alt="">
                    <input type="button" value="Order"  >
                    <h5> Name </h5>
                    <p class="mb-2"><small> Price</small></p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-1 text-center">
                    <img src="assets/products/gal2.png" class="img-fluid mb-3" alt="">
                    <input type="button" value="Order"  >
                    <h5> Name </h5>
                    <p class="mb-2"><small> Price</small></p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-1 text-center">
                    <img src="assets/products/gal3.png" class="img-fluid mb-3" alt="">
                    <input type="button" value="Order"  >
                    <h5> Name </h5>
                    <p class="mb-2"><small> Price</small></p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-1 text-center">
                    <img src="assets/products/gal4.png" class="img-fluid mb-3" alt="">
                    <input type="button" value="Order"  >
                    <h5> Name </h5>
                    <p class="mb-2"><small> Price</small></p>
                </div>
            </div>
        </div>
        <button class="btn2 mb-3"> Unlike Some </button>
    </div>
</section>
-->


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
