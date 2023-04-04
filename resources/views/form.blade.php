<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário :: Teste de rotas</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="container my-5">

    <form action="{{ route('putData') }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="first_name">Primeiro Nome:</label>
            <input class="form-control" type="text" name="first_name" id="first_name">
        </div>

        <div class="mb-3">
            <label for="last_name">Segundo Nome:</label>
            <input class="form-control" type="text" name="last_name" id="last_name">
        </div>

        <div class="mb-3">
            <label for="email">E-mail:</label>
            <input class="form-control" type="email" name="email" id="email">
        </div>

        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>

</div>


<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
