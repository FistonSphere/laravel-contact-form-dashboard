
<style>
    *{
        padding:0;
        margin:0;
        box-sizing: border-box;
    }

</style>

<div class="container">
    <div class="contact-form">
        <form action="" method="post" class="contact-form">
            @csrf
            <div class="form-group">
                <label for="username">Full Name:</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" id="message"></textarea>
            </div>
        </form>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        const form = document.querySelector('.contact-form');
        form.addEventListener('submit', function(event){
            event.preventDefault();
            const formdata = new FormData(form);
            fetch('/dashboard',{
                method:POST,
                body:formdata,
                headers:{
                    'X-CRSF-Token':document.querySelector('meta[name="crsf-token"]').getAttribute('content');
                }
            })
        })
    })
</script>
