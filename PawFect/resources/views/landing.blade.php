<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href=" <?php asset(' https://fonts.gstatic.com') ?>" >
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

    <!--  CSS File -->
    <link  href=" {{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

    <!--  Font -->
    <script src=" {{ URL::asset('https://kit.fontawesome.com/f4480f95c7.js')}} " crossorigin="anonymous"></script>


    <title>PawFect</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand pl-5" href="{{ route('landing-pets') }}"><b>Paw</b>Fect</a>
        <button class="navbar-toggler" type="button"  data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link pr-5" aria-current="page" href="{{route('/profile',3)}}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pr-5" href="{{ route('landing-pets'). '#products' }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pr-5" href="{{ route('landing-pets'). '#categories' }}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pr-5" href="{{ route('landing-pets'). '#sellOffer' }}">Sell</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ URL::asset('assets/wallpapers/Car1.png')}} " class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h4> Add announcements about pets </h4>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{URL::asset('assets/wallpapers/Car2.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h4> Add announcements about pets </h4>
                <p>Let animals become your best friend.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{  URL::asset('assets/wallpapers/Car3.png ')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h4> Add anuouncements about pets </h4>
                <p>Some representative placeholder content for the third slide.</p>
            </div>


        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


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



<section class="categories" id = "categories">
    <div class="container py-5">
        <h1 class="text-center"> Categories </h1>
        <div class="row py-5">
            <div class="col-lg-1">
                <div class="card mb-1 text-center">
                    <a href="{{ route('sort-post','Cat') }}">  <input type="image" src="https://img.icons8.com/flat-round/64/000000/cat--v1.png" class="img-fluid mb-3" alt="" value="cat"></a>
                    <p><small> Cat</small></p>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="card mb-1 text-center">
                    <a href="{{ route('sort-post','dog') }}"><input type="image" src="https://img.icons8.com/flat-round/64/000000/dog--v1.png" class="img-fluid mb-3" alt="" value="dog"  ></a>
                    <p><small> Dog</small></p>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="card mb-1 text-center">
                    <a href="{{ route('sort-post','rabbit') }}"> <input type="image" src="https://img.icons8.com/flat-round/64/000000/rabbit--v1.png" class="img-fluid mb-3" alt="" value="rabbit"  ></a>
                    <p><small> Rabbit </small></p>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="card mb-1 text-center">
                    <a href="{{ route('sort-post','hedgehog') }} "> <input type="image" src="https://img.icons8.com/flat-round/64/000000/hedgehog.png" class="img-fluid mb-3" alt="" value="hedgehog"  ></a>
                    <p><small> Hedgehog </small></p>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="card mb-1 text-center">
                    <a href="{{ route('sort-post','turtle')}} "> <input type="image" src="https://img.icons8.com/flat-round/64/000000/turtle--v1.png" class="img-fluid mb-3" alt="" value="turtle"  ></a>
                    <p><small> Turtle </small></p>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="card mb-1 text-center">
                    <a href=" {{ route('sort-post','chicken') }}"> <input type="image" src="https://img.icons8.com/flat-round/64/000000/chicken--v1.png" class="img-fluid mb-3" alt="" value="chicken"  ></a>
                    <p><small> Chicken </small></p>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="card mb-1 text-center">
                    <a href=" {{ route('sort-post','hamster') }}"> <input type="image" src="https://img.icons8.com/flat-round/64/000000/hamster--v1.png" class="img-fluid mb-3" alt="" value="hamster"  ></a>
                    <p><small> Hamster </small></p>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="card mb-1 text-center">
                    <a href="{{ route('sort-post','parrot') }}"> <input type="image" src="https://img.icons8.com/flat-round/64/000000/bird--v1.png" class="img-fluid mb-3" alt="" value="parrot"  ></a>
                    <p><small> Parrot </small></p>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="card mb-1 text-center">
                    <a href="{{ route('sort-post','fish') }}"> <input type="image" src="https://img.icons8.com/flat-round/64/000000/fish.png" class="img-fluid mb-3" alt="" value="fish"  ></a>
                    <p><small> Fish </small></p>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="card mb-1 text-center">
                    <a href="{{ route('sort-post','reptile') }} "> <input type="image" src="https://img.icons8.com/flat-round/64/000000/lizard.png" class="img-fluid mb-3" alt="" value="reptile"  ></a>
                    <p><small> Reptile </small></p>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="card mb-1 text-center">
                    <a href="{{ route('sort-post','pig') }}"><input type="image" src="https://img.icons8.com/flat-round/64/000000/pig--v1.png" class="img-fluid mb-3" alt="" value="pig"  ></a>
                    <p><small> Pig </small></p>
                </div>
            </div>

            <div class="col-lg-1">
                <div class="card mb-1 text-center">
                    <a href="{{ route('sort-post','others') }} "> <input type="image" src="https://img.icons8.com/flat-round/64/000000/spider.png" class="img-fluid mb-3" alt="" value="others"  ></a>
                    <p><small> Others </small></p>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="parallex py-5" id="sellOffer">
    <div class="container py-5 text-white text-center">
        <div class="row py-3">
            <div class="col-lg-9 mx-auto">
                <h1 class="text-white"> Sell pets if you found/have any </h1>
                <p class="py-3"> BLakjhkfh kjsadhgfksdj aksdjfghkadjfgh kasjdhgfkajsdhg aksdjhgfkdg</p>
                <form action="/post">
                    <button class="btn1 mr-1" type="submit" > Add Anouncement </button>
                </form>

            </div>
        </div>
    </div>
</section>


<section class="credits">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-12">
                <div class="mb-1 text-center">
                    <p><small> INHA University In Tashkent   (998 97) 123-34-34   Tashkent, Uzbekistan,  2021 </small></p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="{{ URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
