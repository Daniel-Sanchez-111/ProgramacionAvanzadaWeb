<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create client</title>
</head>
<body>
    <form method="POST" action="http://127.0.0.1:8000/clients">
        @csrf
        <label>
            Nombre
        </label>
        <input type="text" placeholder="Name" name="name">
        <br>
        <label>
            Email
        </label>
        <input type="email" placeholder="Email" name="email">
        <br>
        <label>
            Phone number
        </label>
        <input type="text" placeholder="Phone number" name="phone_number">
        <button type="submit">Save</button>

    </form>
</body>
</html>