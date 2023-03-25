

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Cadastro de Celulares</title>
    </head>
    <body>
        <div class="container mb-3">
            <h1>Novo Celular</h1>

            <form method="POST" action="{{ route('celulares.store') }}">
            <a href="{{ route('celulares.index') }}">celulares</a>
             {{ $celular->nome }}

                @csrf

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Cor</label>
                    <input type="text" name="cor" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Modelo</label>
                    <input type="number" name="modelo" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Ano</label>
                    <select name="ano" class="form-control">
                        <option value="22">dois mil e vinte dois</option>
                        <option value="23">dois mil e vinte três</option>
                        <option value="21">dois mil e vinte um</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Cor</label>
                    <input type="text" name="cor" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Modelo</label>
                    <textarea name="modelo" id="" rows="5" class="form-control"></textarea>
                </div>

                <div>
                    <input type="submit" value="Salvar Celular" class="btn btn-primary">

                </div>
            </form>
        </div>
    </body>
</html>








