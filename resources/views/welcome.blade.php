<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <script src="/vendors/socket.io/socket.io.min.js"></script>
        <script>
            var socket = io('{{env("NODE_URL")}}');
        </script>
    </head>
    <body>
        <h1>Laravel</h1>
    </body>
</html>
