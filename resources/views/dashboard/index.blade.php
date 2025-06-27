@if(auth::attempt(['email' => '{{ $email }}', 'password' => '{{ $password }}']))
    <div class="container">
        <h1>Welcome to the Dashboard</h1>
        <p>You are logged in as {{ auth()->user()->fname }}</p>
        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
    </div>

@else
<p>please login first</p>
@endif
