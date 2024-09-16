<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  scroll-behavior: smooth; /* Para a navegação suave */
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: right;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: left;
}

.container {
  display: flex;
  width: 80%;
  margin: 0 auto;
  align-items: center;
}

.container img {
  width: 100%;
  max-width: 200px;
  height: auto;
  margin-right: 20px;
}

.container .text {
  width: 100%;
}

.image{
  border: 5px solid black;
  margin: 5px;
}

@media screen and (max-width: 768px) {
  .container {
    flex-direction: column;
    text-align: center;
  }

  .container img {
    margin: 0 0 10px 0;
    max-width: 100%;
  }
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }

  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
<div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#section1">Câncer de Mama</a>
    <a href="#section2">Classificação</a>
    <a href="#section3">Sistema</a>
  </div>
  <a href="{{ route('login') }}" class="logo">CompanyLogo</a>
</div>

<div id="home" style="padding: 20px;">
  <h1>Bem-vindo à nossa página</h1>
  <p>Explore as seções abaixo navegando pelos botões acima.</p>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="section1" class="container">
  <img src="images/hands.webp" alt="Descrição da imagem" class="image">
  <p class="text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </p>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="section2" class="container">
  <img src="images/hands.webp" alt="Descrição da imagem" class="image">
  <p class="text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </p>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="section3" class="container">
  <img src="images/hands.webp" alt="Descrição da imagem" class="image">
  <p class="text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </p>
</div>

</body>
</html>
