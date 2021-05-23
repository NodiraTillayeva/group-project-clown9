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

    <title> Log In </title>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body
        {
            background: #123A25;
        }
        .row
        {
            align-items: center;
            background: #F1A93D;
            border-radius: 30px;
        }
        img {
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }
        h1
        {
            color: white;
            font-family: montserrat;
            font-weight: 400;
            font-size: 50px;
        }
        .btn1
        {
            border: none;
            margin-bottom: 10px;
            font-family: montserrat;
            font-weight: 400;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: #123A25;
            color: white;
            border-radius: 4px;
        }
        .btn1:hover
        {
            background: white;
            border: 1px solid;
            color: #123A25;
        }
        a, p
        {
            color: white;
            font-family: montserrat;
            font-weight: 500;

        }

        a:hover
        {
            color: #123A25;
        }


    </style>

</head>
<body>
<section class="Form my-5 mx-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-5">
                <img src="assets/LogInBg.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-7 px-5 ">
                <h1>Log In</h1>
@yield('content')
            </div>
        </div>
    </div>
</section>
</body>
</html>
