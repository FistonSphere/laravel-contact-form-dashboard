<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <title>Register</title>
</head>


<body>
    <div class="container">
        <form action="{{ route('register.post') }}">
            @csrf
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" name="fname" id="fname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                    required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="form-group">
                <a href="{{ route('register') }}">Don't have an account?<span> Register here</span></a>
            </div>

        </form>
    </div>
</body>

</html>
