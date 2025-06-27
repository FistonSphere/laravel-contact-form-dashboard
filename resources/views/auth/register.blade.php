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
        <form action="{{ route('register.post') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" name="fname" id="fname" value="{{ old('fname') }}" class="form-control"
                    required>
                @error('fname')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control"
                    required>
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
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </div>
            <div class="form-group">
                <a href="{{ route('login') }}">Do you have an account?<span> Sign In here</span></a>
            </div>

        </form>
    </div>
</body>

</html>
