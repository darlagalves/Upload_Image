<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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
        .content { /* Estilo para o conteúdo principal */
            flex: 1; /* Ocupa o espaço restante da página */
            padding: 20px; /* Espaçamento */
        }

        .card {
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .dropdown-menu {
            position: absolute;
            right: 0;
            top: 100%;
            transform: translateY(10px);
        }

        .dropup .hide-toggle.dropdown-toggle::after {
            display: none !important;
        }

    </style>
</head>
<script>
        function setFormToDelete(id) {
            // Lógica para definir o formulário a ser excluído
            document.querySelector('.delete-form').setAttribute('data-id', id);
        }

        function confirmDelete(id) {
            if (confirm('Tem certeza que deseja excluir este item?')) {
                document.querySelector(`form[data-id='${id}']`).submit();
            }
        }
</script>
<body class="body_doctord">
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
    <div>
        <form method="GET" action="{{ route('doctor_dashboard') }}" class="input-group">
            <input type="search" name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
        </form>
    </div>
	<div class="container mt-5">
        <h1>Pacientes</h1>
        <div class="row">
            @foreach($pacients as $paciente)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <!-- Nome do paciente como um link para a página com mais detalhes -->
                                <a href="{{ route('pacient.pacient', $paciente->id) }}">
                                    <h5 class="card-title">{{ $paciente->name }}</h5>
                                </a>
                                <p class="card-text">{{ $paciente->doctor_id }}</p>
                            </div>
                            <div>
                                <a href="{{ route('pacient.edit_pacient', $paciente->id) }}" class="btn btn-primary">Editar</a>
                                <form method="POST" class="delete-form" data-id="{{ $paciente->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $paciente->id }})">
                                        Excluir
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="card">
            <div class="card-body">
            <a href="{{ route('pacient') }}"> <h5 class="card-title">Título do Card</h5></a>
                <p class="card-text">Algumas informações úteis sobre o card. Pode ser uma descrição breve ou um texto mais longo com detalhes relevantes. </p>
                <a href="#" class="btn btn-primary" style="display:none;">Saiba Mais</a>
                
                <div class="dropdown float-end" style="padding:8px;"><a href="#" class="btn btn-danger">Excluir</a></div>

            </div>
        </div>
        <div class="dropup position-absolute bottom-0 end-0 rounded-circle m-5">
        <a href="{{ route('create_pacient') }}">   <button type="button" class="btn btn-info btn-lg dropdown-toggle hide-toggle" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-patch-plus" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5"/>
                <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z"/>
                </svg>
                <span class="visually-hidden">Add Category</span>
            </button></a>
            <ul class="dropdown-menu">
                <li>
                <a class="dropdown-item" href="#">...</a>
                </li>
            </ul>
        </div>
    </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrKzEtKylqQQ7RmzoHAz4IzkZBgt+XLGpsBt7aGoAzFnWfjbwq+Nm5n9ebhpi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrKzEtKylqQQ7RmzoHAz4IzkZBgt+XLGpsBt7aGoAzFnWfjbwq+Nm5n9ebhpi" crossorigin="anonymous"></script>
        
</body>
</html>