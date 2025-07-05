<style>

    .alert {
        padding: 10px;
        margin: 10px 0;
        border-radius: 5px;
        text-align: center;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .alert-error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }
    .container{
        padding: 20px;
        max-width: 600px;
        margin: 0 auto;
    }
</style>

@if (session('success'))
    <div class="alert alert-success">
        <p>{{ session('success') }}</p>
    </div>
@else
    <div class="alert alert-error">
        <p>{{ session('error') }}</p>
    </div>
@endif

<head>
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
</head>
<div class="container">

    <div class="contact-form">
        <form action="{{ route('send.message') }}" method="post" class="contact-form">
            @csrf
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" name="subject" id="subject">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" id="message"></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Send Message</button>
            </div>
        </form>
    </div>
    <div class="btn">
        <div class="show">

            <form action="{{ route('showMessages') }}" method="get">
                @csrf
                <button type="submit">Show Message</button>
            </form>
        </div>
    </div>
</div>
<script>
    let alertMessage = document.querySelector('.alert');

    if (alertMessage) {
        setTimeout(() => {
            alertMessage.style.display = 'none';
        }, 3000);
    }
</script>
