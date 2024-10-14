<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Comentário</title>
    @vite('resources/css/app.css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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

    body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f0f0f0;
}

.comment-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #fff;
    padding: 40px;
    margin-left: 100px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 80%;
    height: 80%;
}

label {
    font-size: 24px;
    margin-bottom: 20px;
}

textarea {
    width: 100%;
    height: 70%;
    border: 2px solid pink;
    border-radius: 10px;
    padding: 10px;
    font-size: 18px;
    resize: none;
    margin-bottom: 20px;
}

button {
    background-color: pink;
    border: none;
    border-radius: 5px;
    padding: 15px 30px;
    font-size: 18px;
    cursor: pointer;
}

button:hover {
    background-color: #ff69b4;
}

.button1 {
    background-color: pink;
    border: none;
    border-radius: 5px;
    padding: 15px 30px;
    font-size: 18px;
    cursor: pointer;
}

.button1:hover {
    background-color: #ff69b4;
}


    </style>
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
    <div class="comment-container">
            <form action="{{ route('comment.store') }}" method="POST">
                @csrf
                <input type="hidden" name="pacient_id" value="{{ $paciente->id }}">
                <div>
                    <label for="comment">Comentário:</label>
                    <textarea id="comment" name="comment" required></textarea>
                </div>
                <button type="submit">Salvar Comentário</button>
            </form>
    </div>
    <script src="https://kit.fontawesome.com/c036ae9ebf.js" crossorigin="anonymous"></script>

</body>
</html>
