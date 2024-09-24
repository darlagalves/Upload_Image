<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cadastrar Pacientes</title>
    @vite('resources/css/app.css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="body_cadastrarp">
    <div class="sidebar">
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </a>
        <a href="{{ route('doctor_dashboard') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9m0 0l9 9m-9-9v18" />
            </svg>
        </a>
        <a href="{{ route('pacient') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 14a4 4 0 10-8 0v6h8v-6zM12 4a4 4 0 100 8 4 4 0 000-8z" />
            </svg>
        </a>
    </div>
    <main class="content">
    <div class="container_cadastrarp">
        <!-- Avatar (Imagem ou ícone) -->
        <div class="avatar">
            <img src="images/pink-icon.png" alt="Avatar">
        </div>

        <h2 class="h2_cadastrarp">Cadastro de Pacientes</h2>

        <form class="form_cadastrarp" action="{{ route('create_pacient') }}" method="post">
            @csrf
            <input type="hidden" name="doctor_id" value="{{ Auth::id() }}">
            <div class="form-column_cadastrarp">
                <div class="form-group_cadastrarp">
                    <label class="label_cadastrarp" for="name">Nome</label>
                    <input class="input_cadastrarp" type="text" id="name" name="name" required>
                </div>

                <div class="form-group_cadastrarp">
                    <label class="label_cadastrarp" for="age">Idade</label>
                    <input class="input_cadastrarp" type="number" id="age" name="age" required>
                </div>

                <div class="form-group_cadastrarp">
                    <label class="label_cadastrarp" for="height">Altura (cm)</label>
                    <input class="input_cadastrarp" type="number"  id="height" name="height" required>
                </div>
            </div>
            <div class="form-column_cadastrarp">
                <div class="form-group_cadastrarp">
                    <label class="label_cadastrarp" for="weight">Peso (kg)</label>
                    <input class="input_cadastrarp" type="number"  id="weight" name="weight" required>
                </div>

                <div class="form-group_cadastrarp">
                    <label class="label_cadastrarp" for="relapses">Reincidente</label>
                    <input class="input_cadastrarp" type="text" id="relapses" name="relapses" required>
                </div>

                <div class="form-group_cadastrarp">
                    <label class="label_cadastrarp" for="race">Cor ou Raça</label>
                    <input class="input_cadastrarp" type="text" id="race" name="race" required>
                </div>
            </div>

            <div class="btn-center_cadastrarp">
                <button class="button_cadastrarp" type="submit">Cadastrar</button>
            </div>
        </form>

        <!-- Icone de coração -->
        <div class="icon-heart">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#FF6F91" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.293l1.318-1.318a4.5 4.5 0 116.364 6.364l-7.682 7.682a.75.75 0 01-1.06 0L4.318 12.682a4.5 4.5 0 010-6.364z" />
            </svg>
        </div>
    </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
