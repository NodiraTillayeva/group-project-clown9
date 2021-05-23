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

    <title>Edit Profile</title>
</head>
<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid">
        <a class="navbar-brand pl-5" href="#"><b>Paw</b>Fect</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon  fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link pr-5" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pr-5" href="#">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <form action="{{route('editProfile',3)}}" method="post" enctype="multipart/form-data">
        @csrf
    <section class="parallex py-5">
        <div class="container py-5 text-white text-center">
            <div class="row py-3">
                <div class="col-lg-9 mx-auto">
                    <input type="file" name="Image" src="assets/profileavatar.png" class="chooseavatar img-fluid mb-3" >
                    <input type="text" name="FullName" placeholder="Full Name" class="form-control mb-2" >
                    <input type="text" name="UserName" placeholder="@user123" class="form-control mb-2" >
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
                            <input type="Email" name="email" placeholder="example@email.com" class="form-control" >
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card mb-1 text-center">
                            <h5> Phone Number </h5>
                            <input type="tel" name="PhoneNumber" placeholder="99999999" class="form-control" >
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card mb-1 text-center">
                            <h5> Date of birth </h5>
                            <input type="date" name="DateOfBirth" placeholder="00/00/0000" class="form-control" >
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card mb-1 text-center">
                            <h5>Passport Info</h5>
                            <input type="text" name="Passport" placeholder="AA00000" class="form-control" >
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card mb-1 text-center">
                            <h5> Postal Code</h5>
                            <input type="text" name="PostalCode" placeholder="100XXX" class="form-control" >
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card mb-1 text-center">
                            <h5> City </h5>
                            <select class="form-select  p-1" aria-label=".form-select-lg example" name="City">
                                <option selected>Choose your region</option>
                                <option value="Andijan">Andijan</option>
                                <option value="Bukhara">Bukhara</option>
                                <option value="Fergana">Fergana</option>
                                <option value="Jizzakh">Jizzakh</option>
                                <option value="Xorazm">Xorazm</option>
                                <option value="Namangan">Namangan</option>
                                <option value="Navoiy">Navoiy</option>
                                <option value="Qashqadaryo">Qashqadaryo</option>
                                <option value="Samarqand">Samarqand</option>
                                <option value="Sirdaryo">Sirdaryo</option>
                                <option value="Surxondaryo">Surxondaryo</option>
                                <option value="Tashkent Region">Tashkent Region</option>
                                <option value="Karakalpakstan">Karakalpakstan</option>
                                <option value="Tashkent">Tashkent</option>
                            </select>
                        </div>
                    </div>
                    <div class="row py-2">
                        <button class="btnSaveUnlikes m-0 mb-0" type="submit">Save</button>
                    </div>
                </div>
            </div>
    </section>
</form>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
