<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @method('PUT')
    <title>{{ $paciente->name }}</title>
    @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="body_cadastrarp">
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
    <div class="container_pacient">
        <header class="header_pacient">
            <h1 class="h1_pacient">{{ $paciente->name }}</h1>
        </header>
        <div class="cards1_pacient">
            <div class="card_pacient">
                <h2>A paciente tem {{ $paciente->age }} anos, {{ $paciente->height }} de altura, {{ $paciente->weight }} de peso, raça {{ $paciente->race }}, e {{ $paciente->relapses }} recaídas.</h2>
                <p>{{ $paciente->created_at }}</p>
                @if ($diagnostico)
                    <div class="card_diagnostico">
                        <h3>Diagnóstico:</h3>
                        <p>{{ $diagnostico->comment }}</p>
                        <a href="{{ route('diagnosis.edit_diagnosis', $paciente->id) }}" class="btn">Editar</a>
                    </div>
                @else
                    <a href="{{ route('diagnosis.create', ['pacient_id' => $paciente->id]) }}" class="btn btn-primary">Adicionar Diagnóstico</a>
                @endif
            </div>
        </div>
        <div class="cards_pacient">
            <div class="card_low_pacient">
                <a href="{{ route('exam.list', ['pacient_id' => $paciente->id]) }}"><h2 class="image_title_pacient">Imagens de Ultrassom</h2></a>
                <img src="{{ asset('images/ultrassom-de-mama-1.webp') }}" class="image_pacient" alt="Imagem de Ultrassom">
            </div>
            <div class="card_low_pacient">
                <a href="{{ route('comments.diary', ['pacient_id' => $paciente->id]) }}"><h2 class="image_title_pacient">Diário de Bolso</h2></a>
                <img src="{{ asset('images/diary.avif') }}" class="image_pacient2" alt="Diário de Bolso">
            </div>
        </div>
    </div>
</body>
</html>
