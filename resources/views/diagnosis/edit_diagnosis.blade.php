<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Diagnóstico</title>
    @vite('resources/css/app.css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="body_cadastrarp">
    <main class="content">
    <div class="sidebar">
        <a href="#">
            <i class="fa-regular fa-circle-user fa-2xl fa-10x"></i>
        </a>
        <a href="{{ route('doctor_dashboard') }}">
            <i class="fa-solid fa-house fa-2xl fa-6x"></i>
        </a>
        <a href="{{ route('pacient') }}">
            <i class="fa-regular fa-id-card fa-2xl fa-6x"></i>
        </a>
    </div>
    <div class="container-edit-diagnosis">
        <h1 class="h1-edit-diagnosis">Editar Diagnóstico de {{ $paciente->name }}</h1>
        <form class="form-edit-diagnosis" action="{{ route('diagnosis.update', $paciente->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-wrapper"></div>
            <div class="form-group-edit-diagnosis">
                <label class="label-edit-diagnosis" for="comment">Comentário:</label>
                <textarea name="comment" id="comment" class="form-control textarea-edit-diagnosis">{{ $diagnostico->comment }}</textarea>
            </div>
            <button type="submit" class="btn btn-edit-diagnosis">Salvar</button>
        </form>
    </div>
</main>
<script src="https://kit.fontawesome.com/c036ae9ebf.js" crossorigin="anonymous"></script>
</body>
</html>
