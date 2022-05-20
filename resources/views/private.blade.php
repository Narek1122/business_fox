<!DOCTYPE html>
<html>
    <head>
    </head>


    <script src="{{ asset('/js/app.js') }}"></script>
<script>
Echo.private(`Chat.1`)
    .listen('ChatEvent', (e) => {
        console.log(e);
    });
</script>
</html>
