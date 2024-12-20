<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edição de Paciente</title>
    @vite('resources/css/app.css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="body_cadastrarp">
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
    <main class="content">
        <div class="container_cadastrarp">
            <div class="avatar">
                <img src="{{ asset('images/pink-icon.png') }}" alt="Avatar">
            </div>
            <h2 class="h2_cadastrarp">Edição de Dados do Paciente</h2>
            <form class="form_cadastrarp" action="{{ route('pacient.update', $pacient->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-column_cadastrarp">
                    <div class="form-group_cadastrarp">
                        <label class="label_cadastrarp" for="nome">Nome:</label>
                        <input class="input_cadastrarp" type="name" id="nome" name="nome" value="{{ $pacient->name }}" required>
                    </div>
                    <div class="form-group_cadastrarp">
                        <label class="label_cadastrarp" for="idade">Idade:</label>
                        <input class="input_cadastrarp" type="number" id="idade" name="idade" value="{{ $pacient->age }}" required>
                    </div>
                    <div class="form-group_cadastrarp">
                        <label class="label_cadastrarp" for="peso">Peso:</label>
                        <input class="input_cadastrarp" type="number" id="peso" name="peso" value="{{ $pacient->weight }}" required>
                    </div>
                </div>
                <div class="form-column_cadastrarp">
                    <div class="form-group_cadastrarp">
                        <label class="label_cadastrarp" for="altura">Altura:</label>
                        <input class="input_cadastrarp" type="number" id="altura" name="altura" value="{{ $pacient->height }}" required>
                    </div>
                    <div class="form-group_cadastrarp">
                        <label class="label_cadastrarp" for="reincidente">Possui histórico?</label>
                        <input class="input_cadastrarp" type="text" id="reincidente" name="reincidente" value="{{ $pacient->relapses }}" required>
                    </div>
                    <div class="form-group_cadastrarp">
                        <label class="label_cadastrarp" for="cor">Qual raça ou cor você se indentifica?</label>
                        <input class="input_cadastrarp" type="text" id="cor" name="cor" value="{{ $pacient->race }}" required>
                    </div>
                </div>
                <div class="btn-center_cadastrarp">
                    <button class="button_cadastrarp" type="submit">Salvar</button>
                </div>
            </form>
            <div class="icon-heart">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#FF6F91" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.293l1.318-1.318a4.5 4.5 0 116.364 6.364l-7.682 7.682a.75.75 0 01-1.06 0L4.318 12.682a4.5 4.5 0 010-6.364z" />
                </svg>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrKzEtKylqQQ7RmzoHAz4IzkZBgt+XLGpsBt7aGoAzFnWfjbwq+Nm5n9ebhpi" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c036ae9ebf.js" crossorigin="anonymous"></script>
</body>
</html>
