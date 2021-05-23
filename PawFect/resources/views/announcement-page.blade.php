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

    <title> Add Anouncement</title>
</head>
<body >
<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid">
        <a class="navbar-brand pl-5" href="{{ route('landing-pets') }}"><b>Paw</b>Fect</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon  fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            </ul>
        </div>
    </div>
</nav>



<section class="products">
    <div class="container py-1">
        <h1 class="text-center"> New Anouncement</h1>
        <div class="row py-2">


        </div>
    </div>
</section>


<section class="Info">
    <form action="{{ route('post-form') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container py-2">
            <div class="row py-2">
                <div class="col-lg-4">
                    <div class="card mb-1 p-2 text-center">
                        <input type="file" name = "Image"src="assets/profileavatar.png" class="img-fluid mb-3" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="card mb-1 p-2 text-center">
                            <h5> Name </h5>
                            <input type="text" name="Name" placeholder="Kleo" class="form-control text-center" >
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="card mb-1  p-2 text-center">
                            <h5> Breed </h5>
                            <input type="tel" name="Breed" placeholder="African clown" class="form-control text-center" >
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="card mb-1  p-2 text-center">
                            <h5> Type </h5>
                            <select name="Type" class="form-control text-center">
                                <option value="cat">Cat</option>
                                <option value="dog">Dog</option>
                                <option value="rabbit">Rabbit</option>
                                <option value="hedgehog">Hedgehog</option>
                                <option value="turtle">Turtle</option>
                                <option value="chicken">Chicken</option>
                                <option value="hamster">Hamster</option>
                                <option value="parrot">Parrot</option>
                                <option value="fish">Fish</option>
                                <option value="reptile">Reprile</option>
                                <option value="pig">Pig</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="card mb-1 p-2 text-center">
                            <h5> Age </h5>
                            <input type="text" name="Age" placeholder="2" class="form-control text-center" >
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="card mb-1 p-2 text-center">
                            <h5>Price</h5>
                            <input type="text" name="Price" placeholder="25$" class="form-control text-center" >
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="card mb-1 p-2 text-center">
                            <h5>Description</h5>
                            <input type="text" name="Description" placeholder="Enter description" class="form-control text-center">
                        </div>
                    </div>
                    <div class="row py-1">
                        <button class="btnSaveUnlikes ml-0 mb-0" type="submit">Post</button>
                    </div>
                </div>

            </div>
        </div>
    </form>

</section>





<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
