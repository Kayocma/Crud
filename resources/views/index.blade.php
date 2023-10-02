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
            <div class="text-right">
                <a href="create" class="btn btn-dark mt-2">Novos Clientes</a>
            </div>
            <table class="table table-hover mt-2">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Foto</th>
                    <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>{{ $loop->index }}</td>
                                <td>
                                    <a href="/{{ $cliente->id }}/show" class="text-dark">{{ $cliente->nome }}</a>
                                </td>
                            <td>
                                <img src="clientes/{{ $cliente->image }}" class="rounded-circle" width="50" heigth="50"/>
                            </td>
                            <td>
                                <a href="/{{ $cliente->id }}/edit" class="btn btn-dark btn-sm">Editar</a>
                                <form method="POST" class="d-inline" action="/{{ $cliente->id }}/delete">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Deletar</button> 
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>