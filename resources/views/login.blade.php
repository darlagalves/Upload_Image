<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS Personalizado -->
    <style>
        .botaocadastrar{
            border-radius: 40px;
            border: 2px solid gray;
            margin-left: 150px;
            margin-top: 40px;
        }
        .boxprincipal {
            background: linear-gradient(135deg, #ddaafa 0%, #7800A3 100%);
            background-attachment: fixed;
        }

        .box1 {
            border-radius: 40px;
            background-color: #FFFFFF;
            margin-left: auto;
            margin-right: auto;
            margin-top: 120px;
            width: 400px;
            height: auto;
            padding-bottom: 20px;
        }

        .box2 {
            margin-top: 50px;
            padding-top: 50px;
        }

        .titulologin {
            color: #7800A3;
            text-align: center;
            padding: 10px;
        }

        .botaologin {
            color: #FFFFFF;
            background-color: #7800A3;
            width: 200px;
            margin-left: 100px;
            margin-top: 40px;
        }

        .botaologin:hover {
            border: 1px solid #7800A3;
            border-radius: 10px;
            color: black;
        }

        .titulologar {
            font-family: sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 18px;
            color: #6D6D6D;
        }
    </style>
</head>
<body class="boxprincipal">

<main>
    <div class="box1">
        <div class="box2">
            <h1 class="titulologin">Login</h1>
            <form action="/login" method="post">

                <div class="container">
                    <label for="username" class="titulologar">Email</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com">
                </div>

                <div class="container mt-4">
                    <label for="password" class="titulologar">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="senha">
                </div>

                <!-- Botão de Login -->
                <button type="submit" class="btn botaologin" style="display:none;">Login</button>
                <a href="{{ route('doctor_dashboard') }}"  class="btn botaocadastrar">Login</a>
            </form>
            <div>
               <a href="{{ route('doctor_register') }}"  class="btn botaocadastrar">Cadastrar</a>
            </div>
        </div>
    </div>
</main>



<!-- Bootstrap JS (versão individual) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-ZXz72K0+xlgbQKsE7+zIrL3ul9I6NtRW1Q27R+Tm/gJNFXcQ9S5arXesB/g" crossorigin="anonymous"></script>
</body>
</html>