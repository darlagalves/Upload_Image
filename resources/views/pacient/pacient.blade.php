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
            <i class="fa-regular fa-circle-user fa-2xl fa-10x"></i>
        </a>
        <a href="{{ route('doctor_dashboard') }}">
            <i class="fa-solid fa-house fa-2xl fa-6x"></i>
        </a>
        <a href="{{ route('pacient') }}">
            <i class="fa-regular fa-id-card fa-2xl fa-6x"></i>
        </a>
    </div>
    <main class="content-pacient">
    <div class="container_pacient">
        <header class="header_pacient">
            <h1 class="h1_pacient">{{ $paciente->name }}</h1>
        </header>
        <div class="cards1_pacient">
            <div class="card_pacient">
                <div class="conteudo_card_pacient"></div>
                <h2>A paciente tem {{ $paciente->age }} anos, {{ $paciente->height }}cm de altura, {{ $paciente->weight }}kg de peso, se identifica como {{ $paciente->race }}, e {{ $paciente->relapses }} tem histórico anterior com a doença.</h2>
                <p>{{ $paciente->created_at }}</p>
            </div>
            <div class="card_pacient">
                @if ($diagnostico)
                    <div class="card_diagnostico">
                        <h3>Diagnóstico:</h3>
                        <p>{{ $diagnostico->comment }}</p>
                        <a href="{{ route('diagnosis.edit_diagnosis', $paciente->id) }}" class="btn botao-editar-diag">Editar</a>
                    </div>
                @else
                    <a href="{{ route('diagnosis.create', ['pacient_id' => $paciente->id]) }}" class="btn  botao-add-diag">Adicionar Diagnóstico</a>
                @endif
            </div>
        </div>
        <div class="cards_pacient">
            <div class="card_low_pacient">
                <a href="{{ route('exam.list', ['pacient_id' => $paciente->id]) }}" class="image_title_pacient_a"><h2 class="image_title_pacient">Imagens de Ultrassom</h2></a>
                <img src="{{ asset('images/ultrassom-de-mama-1.webp') }}" class="image_pacient" alt="Imagem de Ultrassom">
            </div>
            <div class="card_low_pacient">
                <a href="{{ route('comments.diary', ['pacient_id' => $paciente->id]) }}" class="image_title_pacient_a"><h2 class="image_title_pacient">Diário de Bolso</h2></a>
                <img src="{{ asset('images/archive.png') }}" class="image_pacient2" alt="Diário de Bolso">
            </div>
        </div>
    </div>
</main>
<script src="https://kit.fontawesome.com/c036ae9ebf.js" crossorigin="anonymous"></script>
</body>
</html>
