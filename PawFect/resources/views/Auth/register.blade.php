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
            border-radius: 50px;
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
            font-size: 30px;
        }
        .btn1
        {
            border: none;
            margin-bottom: 5px;
            font-family: montserrat;
            font-weight: 400;
            outline: none;
            height: 40px;
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
            font-size: 15px;

        }

        a:hover
        {
            color: #123A25;
        }



    </style>

</head>
<body>
<section class="Form my-5 mx-1">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-5">
                <img src="assets/LogInBg.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-7 px-5 ">
                <h1>Sign Up</h1>
                <form method="post" action="{{route('user.registration')}}">
                    @csrf
                    <div class="form-row">
                        <div class="col-lg-9 ">
                            <p> Already have an account? <a href="{{route('user.login')}}">Log In </a></p>
                            <input type="text" placeholder="Full Name" class="form-control my-1 p-1" name="fullName">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-9 ">
                            <input type="text" placeholder="Date of Birth" class="form-control my-1 p-1" name="dateOfBirth">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-9 ">
                            <input type="text" placeholder="Username" class="form-control my-1 p-1"  name="userName">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-9">
                            <input type="email" placeholder="Email Address" class="form-control my-1 p-1"  name="email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-9 ">
                            <input type="tel" placeholder="Phone Number" class="form-control my-1 p-1"  name="phone">
                        </div>
                    </div>
                    <div class="form-row">

                    </div>
                    <div class="form-row">
                        <div class="col-lg-9 ">
                            <select class="form-select  p-1" aria-label=".form-select-lg example" name="cityName">
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
                        <div class="row  my-1 ">
                            <div class="col-6 col-sm-4 ">
                                <input type="text" placeholder="Postal Code" class="form-control p-1 "  name="postalCode">
                            </div>
                            <div class="col-6 col-sm-5 ">
                                <input type="text" placeholder="Passport Number" class="form-control p-1"  name="passportNumber">
                            </div>
                        </div>
                    </div>
                    <div class="row my-1" >
                        <div class="col-6 col-sm-4">
                            <input type="password" placeholder="*******" class="form-control p-1 " name="password">
                        </div>
                        <div class="col-6 col-sm-5">
                            <input type="password" placeholder="*******" class="form-control p-1" name="confirm_password">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-9">
                            <button type="submit" value="submit" class="btn1"> Log In </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                @endif
            </ul>
        </div>

</section>
</body>
</html>

