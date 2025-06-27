<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <title>Login</title>
</head>

<style>
    .alert {
        margin: 20px auto;
        width: 80%;
        text-align: center;
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
        padding: 15px;
        border-radius: 5px;
    }
</style>

<body>
    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession
    <div class="container">
        <form action="{{ route('login.post') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
            <div class="form-group">
                <a href="{{ route('register') }}">Don't have an account?<span> Sign Up here</span></a>
            </div>

        </form>
    </div>

    <script>
        let alert - success = document.querySelector(.
            'alert-success');
        if (alert - success) {
            setTimeout(() => {
                alert - success.style.display = 'none';
            }, 3000)
        }
    </script>
</body>

</html>
