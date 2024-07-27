<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}">
</head>
<body>
    <div style="width: 100%; text-align: center">
        <h1>Login</h1>
    </div>

    <form class="form">
        <label>
            <strong>Email:</strong>
        </label>
        <br>
        <input type="email" style="border: 1px solid grey">

        <br>
        <br>

        <label>
            <strong>Password:</strong>
        </label>
        <br>
        <input type="password" style="border: 1px solid grey">

        <br>
        <br>

        <button type="submit" style="cursor: pointer; width: 50%; background: lightblue; border: none">
            Login
        </button>
    </form>
</body>
</html>
