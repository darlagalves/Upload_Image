<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cadastrar Pacientes</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS Personalizado -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            margin: 0;
        }

        .sidebar {
            position: fixed; /* Mantém a sidebar fixa */
            top: 0;
            left: 0;
            width: 100px;
            max-width: 200px;
            height: 100vh; /* Ocupa toda a altura da tela */
            background-color: #FFC0CB;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }

        .sidebar svg {
            margin-bottom: 20px;
            width: 40px;
            height: 40px;
            color: white;
        }

        .content {
            margin-left: 120px; /* Garante que o conteúdo não sobreponha a sidebar */
            padding: 20px;
            flex: 1;
        }

        .icons {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .icons svg {
            width: 40px;
            height: 40px;
            fill: currentColor;
        }
                


        .card {
            /* Estilo para o card */
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Adiciona sombra */
        }

        .card-img-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card {
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Duas colunas */
            gap: 20px; /* Espaçamento entre colunas */
        }

        .form-column {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            margin-bottom: 15px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            grid-column: span 2; /* O botão ocupa as duas colunas */
        }

        button:hover {
            background-color: #0056b3;
        }

        .button1 {
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            grid-column: span 2; /* O botão ocupa as duas colunas */
        }

        .button1:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

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
        <div class="container">
            <h2>Cadastro de Pacientes</h2>
            <form action="{{ route('create_pacient') }}" method="post">
                @csrf
                <input type="hidden" name="doctor_id" value="{{ Auth::id() }}">
                <div class="form-column">
                    <label for="name">Nome:</label>
                    <input type="name" id="name" name="name" required>

                    <label for="age">Idade:</label>
                    <input type="number" id="age" name="age" required>

                    <label for="height">Altura:</label>
                    <input type="number" id="height" name="height" required>
                </div>
                <div class="form-column">
                    <label for="weight">Peso:</label>
                    <input type="number" id="weight" name="weight" required>

                    <label for="relapses">Reincidente:</label>
                    <input type="text" id="relapses" name="relapses" required>

                    <label for="race">Cor ou Raça:</label>
                    <input type="text" id="race" name="race" required>
                </div>
                <button type="submit" >Cadastrar</button>
                <a href="{{ route('pacient') }}" class="button1">Cadastrar</a>
            </form>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
    <script>
        // Depois do carregamento da página
document.addEventListener('DOMContentLoaded', function() {
    // Verifique se o usuário está autenticado
    fetch('/user-info') // Crie uma rota `/user-info` no seu back-end 
        .then(response => response.json()) 
        .then(data => {
            if (data.user_id) { 
                console.log('ID do usuário logado:', data.user_id); 
            } else {
                console.log('Usuário não logado'); 
            }
        })
        .catch(error => console.error('Erro ao obter informações do usuário:', error));
});

    var_dump(race);
    </script>
</body>
</html>
