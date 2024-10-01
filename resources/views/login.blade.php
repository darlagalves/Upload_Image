<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/css/app.css')
</head>
<body class="boxprincipal">

<main>
    <div class="box1">
        <div class="box2">
            <h1 class="titulologin">Login</h1>
            <form action="/login" method="post">
                @csrf
                <div class="container">
                    <label for="username" class="titulologar">Email</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com">
                </div>

                <div class="container mt-4">
                    <label for="password" class="titulologar">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="senha">
                </div>

                <!-- Botão de Login -->
                <button type="submit" class="btn botaologin-principal">Login</button>
            </form>
            <div>
               <a href="{{ route('doctor_register') }}"  class="btn botaologin-principal">Cadastrar</a>
            </div>
        </div>
    </div>
</main>



<!-- Bootstrap JS (versão individual) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-ZXz72K0+xlgbQKsE7+zIrL3ul9I6NtRW1Q27R+Tm/gJNFXcQ9S5arXesB/g" crossorigin="anonymous"></script>
<script>
    // Adicione este script ao seu formulário de login
    document.addEventListener('DOMContentLoaded', function () {
        const loginForm = document.querySelector('form');

        loginForm.addEventListener('submit', function (event) {
            event.preventDefault(); // Impede o envio padrão do formulário

            // Envia os dados do formulário para o backend
            fetch('/login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    email: document.getElementById('username').value,
                    password: document.getElementById('password').value
                })
            })
            .then(response => {
                // Verifica se a resposta do backend é OK (200)
                if (response.ok) {
                    // Redireciona para doctor_dashboard
                    window.location.href = '{{ route('doctor_dashboard') }}';
                } else {
                    // Mostra um erro para o usuário 
                    alert('Credenciais inválidas.');
                }
            })
            .catch(error => {
                console.error('Erro na requisição:', error);
                // Mostra um erro para o usuário
                alert('Erro ao realizar o login. Por favor, tente novamente.');
            });
        });
    });
</script>
</body>
</html>
