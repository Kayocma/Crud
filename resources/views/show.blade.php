<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <title>CRUD-Clientes</title>

    </head>
    <body>

    <nav class="navbar navbar-expand-sm bg-dark">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-light" href="/">Clientes</a>
            </li>
        </ul>

    </nav>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>            
        @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 mt-4">
                <div class="card p-4">
                    <p>CPF/CNPJ : <b>{{ $cliente->cpf_cnpj }}</b></p>
                    <p>Nome : <b>{{ $cliente->nome }}</b></p>
                    <p>Nome Social : <b>{{ $cliente->nome_social }}</b></p>
                    <p>Data de Nascimento : <b>{{ $cliente->data_nascimento }}</b></p>
                    <img src="/clientes/{{ $cliente->image }}" class="rounded" width="100%">
                </div>
            </div>
        </div>
    </div>

</body>
</html>