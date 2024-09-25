<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carregar Imagem</title>
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

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

        /* Container de conteúdo */
        .container {
            margin-left: 220px; /* Ajusta o conteúdo para não sobrepor a sidebar */
            padding: 20px;
            width: calc(100% - 220px); /* Ajusta a largura para ocupar o restante da tela */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Upload Section */
        .upload-section {
            background-color: #FCCDD3;
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            width: 400px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .upload-button {
            background-color: #FF66B2;
            color: white;
            padding: 15px;
            border-radius: 50px;
            cursor: pointer;
            display: inline-block;
            margin-bottom: 20px;
        }

        .arrow-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px; /* Espaçamento entre a seta e o texto */
        }

        .add-image-text {
            font-size: 14px;
            color: white;
            font-weight: bold;
        }

        .image-preview {
            margin-top: 20px;
        }

        .image-preview img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .save-button {
            background-color: #FFFFFF;
            color: #FF66B2;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .save-button:hover {
            background-color: #FF66B2;
            color: #FFFFFF;
        }

        /* Responsividade */
        @media screen and (max-width: 768px) {
            .container {
                margin-left: 0;
                width: 100%;
                padding: 10px;
            }

            .sidebar {
                width: 80px;
            }

            .container {
                margin-left: 80px;
                width: calc(100% - 80px);
            }

            .upload-section {
                width: 100%;
            }
        }

    </style>
</head>
<body>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
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
        <div class="upload-section">
            <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="file-upload" class="upload-button">
                    <div class="arrow-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 12a.5.5 0 0 1-.5-.5V3.707L5.354 6.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 3.707V11.5a.5.5 0 0 1-.5.5z"/>
                        </svg>
                        <span class="add-image-text">Carregar Imagem</span>
                    </div>
                </label>
                <input type="file" id="file-upload" name="image" accept="image/*" style="display: none;" />
                <div class="image-preview">
                    <img id="preview" src="" alt="Imagem Carregada" style="display: none;" />
                </div>
                <button type="submit" class="save-button">Salvar</button>
            </form>
        </div>
    </div>
</body>
<script>
document.getElementById('file-upload').addEventListener('change', function(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var img = document.getElementById('preview');
        img.src = reader.result;
        img.style.display = 'block';
    }
    reader.readAsDataURL(event.target.files[0]);
});
</script>
</html>
