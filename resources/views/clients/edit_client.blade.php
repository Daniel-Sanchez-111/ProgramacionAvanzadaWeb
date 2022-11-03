<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit client</title>
</head>
<body>
    <form method="POST" action="{{url('clients/')}}">
        @method('PUT')
        @csrf
        
        <label>
            Nombre
        </label>
        <input type="text" placeholder="Name" name="name" value="{{$client->name}}">
        <br>
        <label>
            Email
        </label>
        <input type="email" placeholder="Email" name="email" value="{{$client->email}}">
        <br>
        <label>
            Phone number
        </label>
        <input type="text" placeholder="Phone number" name="phone_number" value="{{$client->phone_number}}">
        <input type="hidden" name="id" value="{{$client->id}}">

        <button type="submit">Update</button>

        
    </form>
</body>
</html>