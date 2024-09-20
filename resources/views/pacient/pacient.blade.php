<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página com Cards</title>
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
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    }

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

header h1 {
    font-size: 24px;
    color: #333;
}

header .icon img {
    width: 40px;
    height: 40px;
}

.cards1 {
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.cards {
    width: 100%;
    display: flex;
    justify-content: space-between;
}

.card {
    background-color: #ffcccb;
    padding: 20px;
    margin:30px;
    border-radius: 8px;
    width: 70%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.card h2 {
    margin-top: 0;
    color: #333;
}

.card img {
    max-width: 100%;
    height: auto;
    margin-top: 10px;
}

.image{
    width: 300px;
    height: 300px;
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
    <div class="container">
        <header>
            <h1>Nome da paciente</h1>
        </header>
        <div class="cards1">
            <div class="card">
                <h2>Diagnóstico</h2>
                <p>Data do diagnóstico</p>
            </div>
        </div>
        <div class="cards">
            <div class="card">
                <a href="{{ route('list_exam') }}"><h2>Imagens de Ultrassom</h2></a>
                <img src="images/ultrassom-de-mama-1.webp" class="image" alt="Imagem de Ultrassom">
            </div>
            <div class="card">
                <a href="{{ route('diary') }}"><h2>Diário de Bolso</h2></a>
                <img src="images/pastas.jpg" class="image" alt="Diário de Bolso">
            </div>
        </div>
    </div>
</body>
</html>