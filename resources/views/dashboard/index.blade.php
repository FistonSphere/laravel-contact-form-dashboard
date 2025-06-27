
    <div class="container">
        <h1>Welcome to the Dashboard</h1>
        <p>You are logged in as {{ auth()->user()->fname }}</p>
        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
    </div>
