<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    <h1></h1>

    <form method="POST" action="{{url('login/')}}">
        @csrf
        <label>
            Email
        </label>
        <input type="email" placeholder="Email" name="email">
        <br>
        <label>
            Password
        </label>
        <input type="password" placeholder="Password" name="password">
        <br>
        <button type="submit">Login</button>
    </form>

</body>
</html>