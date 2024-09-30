<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Comentários do Paciente</title>
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

    .floating-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #17a2b8; /* Cor de fundo */
        color: white; /* Cor do texto */
        border: none;
        border-radius: 50%;
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        z-index: 1000; /* Garante que o botão fique acima de outros elementos */
    }

    .floating-btn svg {
        width: 40px;
        height: 40px;
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
</body>
</html>
