<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Diagnóstico</title>
    <link rel="stylesheet" href="styles.css">
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
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7z" />
            </svg>
        </a>
    </div>
    <div class="comment-container">
        <form action="{{ route('diagnostico.store') }}" method="POST">
            @csrf
            <input type="hidden" name="paciente_id" value="{{ $paciente->id }}">
            <label for="diagnostico">{{ $paciente->name }}</label>
            <textarea id="diagnostico" name="diagnostico" placeholder="Escreva o diagnóstico aqui..."></textarea>
            <button type="submit" class="button1">Salvar</button>
        </form>
    </div>
</body>
</html>
