<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Users</title>
    </head>
    <body>
        <h1>User page</h1>
        @foreach($users as $user)
            <h3>{{$user}}</h3>
        @endforeach
    </body>
</html>