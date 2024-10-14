<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Comentários do Paciente</title>
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
        padding: 20px;
        width: calc(100% - 200px); /* Subtrai a largura da sidebar para manter a responsividade */
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center; /* Centraliza os cards horizontalmente */
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

    .comment-section {
        background-color: #ffc0cb; /* Fundo rosa claro */
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        width: 100%; /* Ajuste conforme necessário */
        max-width: 800px; /* Aumente para 800px */
        position: relative; /* Necessário para o dropdown */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .comment-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .comment-header h3 {
        margin: 0; /* Remove margem padrão */
    }

    .dropdown {
        position: absolute;
        top: 20px;
        right: 20px;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .content-area {
        margin-top: 0.5em;
        background-color: white;
        border-radius: 10px;
        padding: 10px;
    } /* Estilo para área de conteúdo abaixo dos cabeçalhos */

    
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
    <div class="content">
        <h1>Comentários de {{ $paciente->name }}</h1>
        @foreach ($comentarios as $comentario)
            <div class="comment-section">
                <div class="comment-header">
                    <h3>{{ $comentario->created_at }}</h3>
                    <div class="dropdown">
                        <button class="edit-delete">⋮</button>
                        <div class="dropdown-content">
                            <form action="{{ route('comment.destroy', $comentario->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este comentário?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: none; border: none; color: red; cursor: pointer;">Excluir</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="content-area">
                    {{ $comentario->comment }}
                </div>
            </div>
        @endforeach
        <div class="dropup position-absolute bottom-0 end-0 rounded-circle m-5">
            <a href="{{ route('comment.create', ['pacient_id' => $paciente->id]) }}">
                <button type="button" class="floating-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-patch-plus" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5"/>
                        <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z"/>
                </svg>
            </button>
        </a>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/c036ae9ebf.js" crossorigin="anonymous"></script>

</body>
</html>
