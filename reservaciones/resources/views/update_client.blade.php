<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola</h1>


    <form method="post" action="{{ url('clients/') }}">
        @method('PUT')
        @csrf
        <label>Email</label>
        <input type="text" name="nombre" placeholder="Manuel" value="{{ $client->name}}">


        <label>Password</label>
        <input type="email" name="password"  placeholder="example@example" value="{{ $client->email}}">

        <label>phone number</label>
        <input type="text" name="phone_number"  placeholder="6121316096" value="{{ $client->phone_number}}">

        <input type="hidden" name="id" value=" {{ $client->id }} ">

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>