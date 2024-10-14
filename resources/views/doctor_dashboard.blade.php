<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
    <main class="content">
    <div class="search-container  mt-5 mb-0 fixed-top ">
        <form method="GET" action="{{ route('doctor_dashboard') }}" class="input-group search-doctor-dashboard">
            <input type="search" name="search" class="form-control rounded" placeholder="Pesquisar por nome" aria-label="Search" aria-describedby="search-addon" />
            <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
        </form>
    </div>
	<div class="container p-5">
    <h1> Pacientes</h1>
        <div class="row">
            @foreach($pacients as $paciente)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <a href="{{ route('pacient.pacient', $paciente->id) }}" class="card-title-a">
                                    <h5 class="card-title">{{ $paciente->name }}</h5>
                                </a>
                                <p class="card-text">{{ $paciente->created_at }}</p>
                            </div>
                            <div class="col-12 d-flex gap-2">
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
        <div class="dropup position-absolute bottom-0 end-0 rounded-circle m-5">
        <a href="{{ route('create_pacient') }}">   <button type="button" class="floating-btn" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-patch-plus" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5"/>
                <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z"/>
                </svg>
                <span class="visually-hidden">Add Category</span>
            </button></a>
        </div>
    </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrKzEtKylqQQ7RmzoHAz4IzkZBgt+XLGpsBt7aGoAzFnWfjbwq+Nm5n9ebhpi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrKzEtKylqQQ7RmzoHAz4IzkZBgt+XLGpsBt7aGoAzFnWfjbwq+Nm5n9ebhpi" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c036ae9ebf.js" crossorigin="anonymous"></script>
        
</body>
</html>