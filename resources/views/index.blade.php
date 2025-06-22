<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <title>Welcome</title>
</head>


<body>
    <div class="container">
        <div class="card">
            <div class="content">
                <h3>Welcome Back 👋.</h3>
            </div>
            <div class="btn">
                <div class="login">
                    <button class="b1"><a href="{{ route('login') }}">Login</a></button>
                </div>
                <div class="register">
                    <button class="b2"><a href="{{ route('register') }}">Register</a></button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
