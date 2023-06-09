<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Lista de Celulares</title>
    </head>
    <body>
        <div class="container">
            <h1>Lista de Celulares</h1>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Nome</th>
                    <th>Cor</th>
                    <th>Modelo</th>
                    <th>Ano</th>
                </tr>
                @foreach ($celulares as $celular)
                <tr>
                    <td>{{ $celular->nome }}</td>
                    <td>{{ $celular->cor }}</td>
                    <td>{{ $celular->modelo }}</td>
                    <td>{{ $celular->ano }}</td>
                </tr>

                @endforeach
            </table>
        </div>


    </body>
</html>
