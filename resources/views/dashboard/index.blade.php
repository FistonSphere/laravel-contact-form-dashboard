<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
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

            <button>Show Messages</button>
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
