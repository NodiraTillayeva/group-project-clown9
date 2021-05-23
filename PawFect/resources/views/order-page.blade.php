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
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/style.css') }}" >

    <!--  Font -->
    <script src="{{ URL::asset('https://kit.fontawesome.com/f4480f95c7.js') }}" crossorigin="anonymous"></script>

    <title>Order</title>
  </head>
  <body >
<nav class="navbar navbar-expand-lg bg-white">
  <div class="container-fluid">
    <a class="navbar-brand pl-5" href=" {{route('landing-pets')   }}  "><b>Paw</b>Fect</a>
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



<section class="orderdetails">

  <div class="container py-1">
    <h1 class="text-center"> Detailed Info </h1>
    <div class="row py-5">
      <div class="col-lg-4">
        <div class="card mb-1 p-2 text-center">
          <img src="{{ $PostDetails->PhotoPath}}" class="img-fluid mb-3" alt="">
          <input type="button" value="See"  >

          <h5> {{ $PostDetails->PostName }} </h5>
           <p class="mb-2"><small> {{ $PostDetails->Price }}</small></p>
        </div>
      </div>
     <div class="col-lg-8">
      <div class="row">
        <div class="card mb-1 p-2 text-center">
          <h5> Description </h5>
          <p class="mb-1"><small> {{ $PostDetails->Description }} </small></p>
        </div>
      </div>
      <div class="row py-1 ">
        <div class="card mb-1 p-2 text-center">
          <h5> Breed </h5>
          <p class="mb-1"><small> {{$PostDetails->Breed}}</small></p>
        </div>
      </div>
    <div class="row py-1">
        <div class="card mb-1 p-2 text-center">
          <h5> Age </h5>
          <p class="mb-1"><small> {{ $PostDetails->Age }} </small></p>
        </div>
      </div>

    <div class="row py-1">
        <div class="card mb-1 p-2 text-center">
          <h5> Owner Name </h5>
          <p class="mb-1"><small> {{$user}} </small></p>
        </div>
      </div>
   <div class="row py-1">
        <div class="card mb-1 p-2 text-center">
          <h5> Owner Number </h5>
          <p class="mb-1"><small> +{{$phone}} </small></p>
        </div>
      </div>
    <div class="row py-1">
        <div class="card mb-1  p-2 text-center">
          <h5> Date Posted </h5>
          <p class="mb-1"><small> {{ $PostDetails->created_at }} </small></p>
        </div>
    </div>

    <div class="row py-1">
        <div style="border: none;" class="card mb-1  p-2 text-center">
<button class="btnorder  m-3 p-3"> Order </button>
        </div>
      </div>
    </div>

  </div>

  </div>
</section>







    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
