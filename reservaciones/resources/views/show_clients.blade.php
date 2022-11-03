<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>clientes</h3>

    <table>
        <thead>
            <th>
                #
            </th>
            <th>
                name
            </th>
            <th>
                email
            </th>
            <th>
                phone number
            </th>
            <th>
                actions
            </th>
        </thead>

        <tbody>
            @foreach($clients as $client)
                <tr>
                    <thead>
                        {{$client -> id}}
                    </thead>
                    <thead>
                        {{$client -> name}}
                    </thead>
                    <thead>
                        {{$client -> email|}}
                    </thead>
                    <thead>
                        {{$client -> phone_number}}
                    </thead>
                    <thead>
                        <a href="{{ url('/clients/edit/'.$client->id) }}">Editar</a>
                    </thead>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>