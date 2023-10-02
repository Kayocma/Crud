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
                <div class="col-sm-8">
                    <div class="card mt-3 p-3">
                        <form method="POST" action="/store" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>CPF ou CNPJ: </label>
                                <input type="text" name="cpf_cnpj" class="form-control" value="{{ old('cpf_cnpj') }}">
                                @if ($errors->has('cpf_cnpj'))
                                    <span class="text-danger">{{ $errors->first('cpf_cnpj') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Nome: </label>
                                <input type="text" name="nome" class="form-control" value="{{ old('nome') }}">
                                @if ($errors->has('nome'))
                                    <span class="text-danger">{{ $errors->first('nome') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Nome Social: </label>
                                <input type="text" name="nome_social" class="form-control" value="{{ old('nome_social') }}">
                                @if ($errors->has('nome_social'))
                                    <span class="text-danger">{{ $errors->first('nome_social') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Data de Nascimento: </label>
                                <input type="text" name="data_nascimento" class="form-control" value="{{ old('data_nascimento') }}">
                                @if ($errors->has('data_nascimento'))
                                    <span class="text-danger">{{ $errors->first('data_nascimento') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Foto: </label>
                                <input type="file" name="image" class="form-control">
                                @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-dark">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>