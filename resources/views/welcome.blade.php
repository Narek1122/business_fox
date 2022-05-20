<!DOCTYPE html>
<html>
    <head>
    </head>


    <script src="{{ asset('/js/app.js') }}"></script>
<script>
Echo.channel('Some')
    .listen('.SocketOne', (e) => {
         console.log(e);
    })
</script>
</html>
