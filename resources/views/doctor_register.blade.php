<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cadastro</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/css/app.css')
</head>
<body class="boxprincipal">

<main>
    <div class="box1">
        <div class="box2">
            <h1 class="titulologin">Cadastro</h1>
            <form action="{{ route('doctor_register') }}" method="post">
                @csrf
                <!-- Campos de formulário -->
                <div class="container">
                    <label for="email" class="titulologar">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>

                <div class="container mt-4">
                    <label for="password" class="titulologar">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="senha">
                </div>

                <div class="container mt-4">
                    <label for="password_confirmation" class="titulologar">Repetir Senha</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="senha">
                </div>

                <div class="container mt-4">
                    <label for="name" class="titulologar">Nome</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="container mt-4">
                    <label for="phone" class="titulologar">Telefone</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>

                <div class="container mt-4">
                    <label for="crm" class="titulologar">CRM</label>
                    <input type="text" class="form-control" id="crm" name="crm">
                </div>

                <div class="container mt-4">
                    <input type="checkbox" id="termsCheck" name="termsCheck">
                    <label for="termsCheck" class="titulologar">Eu aceito os <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">termos de uso</a>.</label>
                </div>

                <button type="submit" class="btn botaologin-principal" id="submitBtn" disabled>Cadastrar</button>
            </form>

        </div>
    </div>
</main>

<!-- Modal para os Termos de Uso -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Termos de Uso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Insira aqui os termos de uso da sua aplicação.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Popper.js e Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb+PgupPzZI7r7W1ANTF36rNphzH+EkFpc4vtv9zB6ER7zVVp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-STfVfM6h5tt0kFVKFhMC2Q4rdrChivcJ6HrmE1FfJvvL8hb2Bhq+2j7QWgwVQKCgf" crossorigin="anonymous"></script>

<!-- Script para habilitar/desabilitar o botão de cadastro -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const termsCheck = document.getElementById('termsCheck');
        const submitBtn = document.getElementById('submitBtn');

        termsCheck.addEventListener('change', function () {
            submitBtn.disabled = !this.checked;
        });
    });
</script>
</body>
</html>
