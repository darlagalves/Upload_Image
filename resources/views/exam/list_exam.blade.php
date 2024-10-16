<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card de Diagnóstico</title>
    @vite('resources/css/app.css')
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

        /* Ajuste no layout da página */
.content {
    margin-left: 120px;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center; /* Centraliza os cards */
}



/* Define um tamanho fixo para as imagens e centraliza */
.ultrasound img {
    width: 250px;  /* Largura fixa */
    height: 250px; /* Altura fixa */
    object-fit: cover; /* Corta a imagem para preencher o espaço sem distorcer */
    border-radius: 8px;
    margin: 0 auto 20px; /* Centraliza e adiciona espaço embaixo */
}

/* Mais espaço entre os ícones */
.icons {
    display: flex;
    justify-content: space-around;
    margin-bottom: 30px; /* Aumenta o espaço entre os ícones e o restante do conteúdo */
}

.icons svg {
    width: 40px;
    height: 40px;
    fill: currentColor;
}




        .fixed {
            width: 100px;
            max-width: 200px;
            background-color: #FFC0CB; /* Rosa */
        }

        

        /* Estilos para o modal */
        .modal {
            display: none; /* Escondido por padrão */
            position: fixed; /* Fica fixo na tela */
            z-index: 1000; /* Fica acima de outros elementos */
            padding-top: 60px; /* Espaço no topo */
            left: 0;
            top: 0;
            width: 100%; /* Largura total */
            height: 100%; /* Altura total */
            overflow: auto; /* Habilita scroll se necessário */
            background-color: rgb(0,0,0); /* Cor de fundo */
            background-color: rgba(0,0,0,0.9); /* Fundo com opacidade */
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        .modal-content, #caption {  
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {transform: scale(0)} 
            to {transform: scale(1)}
        }

        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
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
    <div class="content-exam">
        @foreach($images as $image)
        <div class="card-ult">
                <h2>{{ $image->created_at->format('d/m/Y') }}</h2>
                <div class="ultrasound">
                    <img src="{{ asset('storage/images/' . $image->path) }}" alt="{{ $image->name }}">
                </div>
            <div class="icons">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-clipboard-heart" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M5 1.5A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5zm5 0a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5z"/>
                    <path d="M3 1.5h1v1H3a1 1 0 0 0-1 1V14a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V3.5a1 1 0 0 0-1-1h-1v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2"/>
                    <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.31 8 6.982"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-clipboard2-pulse" viewBox="0 0 16 16">
                    <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5z"/>
                    <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z"/>
                    <path d="M9.979 5.356a.5.5 0 0 1 .349.606l-1 4a.5.5 0 0 1-.962.036L7.13 8.763l-.257 1.028a.5.5 0 0 1-.962.037l-.616-2.465-.38 1.265a.5.5 0 0 1-.478.367H3.5a.5.5 0 0 1 0-1h.61l.704-2.346a.5.5 0 0 1 .967-.02l.598 2.393.295-1.18a.5.5 0 0 1 .967-.02l.854 3.415.704-2.816a.5.5 0 0 1 .606-.349z"/>
                </svg>
            </div>
            <div class="notes">
                <p>{{ $image->network_result }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="dropup position-absolute bottom-0 end-0 rounded-circle m-5">
        <a href="{{ route('exam.create', ['pacient_id' => $paciente->id]) }}">
            <button type="button" class="floating-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-patch-plus" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5"/>
                    <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z"/>
                </svg>
            </button>
        </a>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal">
        <span class="close">×</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
    <script src="https://kit.fontawesome.com/c036ae9ebf.js" crossorigin="anonymous"></script>
</body>
<script>
    // Obtenha o modal
    var modal = document.getElementById("myModal");

    // Obtenha a imagem e o elemento modal
    var img = document.querySelector(".ultrasound img");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");

    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Obtenha o elemento <span> que fecha o modal
    var span = document.getElementsByClassName("close")[0];

    // Quando o usuário clicar no <span> (x), feche o modal
    span.onclick = function() { 
        modal.style.display = "none";
    }
</script>
</html>
