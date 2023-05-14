<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Gestão</title>
    <link rel="stylesheet" href="{{ asset('storage/bootstrap/bootstrap.css') }}">
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr class="table-dark">
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Motivo Contato</th>
                        <th>mensagem</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contatos as $contato)
                    <tr>
                        <td>{{$contato->nome}}</td>
                        <td>{{$contato->telefone}}</td>
                        <td>{{$contato->email}}</td>
                        <td>{{$contato->subject->description}}</td>
                        <td>{{$contato->mensagem}}</td>
                        <td>-</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="{{ asset('storage/jquery/jquery.js') }}"></script>
    <script src="{{ asset('storage/bootstrap/bootstrap.bundle.js') }}"></script>
</body>
</html>
