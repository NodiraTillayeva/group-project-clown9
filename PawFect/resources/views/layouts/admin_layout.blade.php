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
    <link rel="stylesheet" href="/CSS/style.css" >

    <!--  Font -->
    <script src="https://kit.fontawesome.com/f4480f95c7.js" crossorigin="anonymous"></script>

    <title>Admin Page</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid">
        <a class="navbar-brand pl-5" href="/admin"><b>Paw</b>Fect</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon  fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <!--  ADD go to main page here     -->

                    <a class="nav-link pr-5" href="/">Log Out</a>

                    <!--  ADD go to main page here     -->
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-light bg-light">
    <form method="post" action="/admin/search" class="container-fluid">
        @csrf
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" name="searchUserForAdmin" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </div>
    </form>
</nav>
@yield('content')
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
