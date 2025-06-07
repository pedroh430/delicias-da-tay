<!-- index.php -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delicias da tay</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>


  <div class="fundo"></div>
  <nav class="navbar">
    <ul>
      <li><a href="https://wa.me/5511945098191">WhatsApp</a></li>
      <li><a
          href="https://www.instagram.com/deliciasdatay11?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Instagram</a>
      </li>
    </ul>

    <header>
      <a href="carrinho.html" class="icone-carrinho">
        <i class="fas fa-shopping-cart"></i>
        <span id="quantidade-carrinho">0</span>
      </a>
      <button id="confirmar">Confirmar Pedido</button>
      


    </header>

    <h2>Itens Selecionados:</h2>
    <ul id="lista-itens"></ul>

  </nav>

  <div id="titulo">
    <h1>Delicías da Tay</h1>
  </div>


  <br>


  <div class="bloco1">


    <div class="produto" data-nome="Bolo de festa" data-preco="40.00">

      <h2>Bolo De Festa</h2>

      <br>
      <img src="imag/bolo de festa.jpeg" alt="bolo">
      <p>Temas a preferência do cliente</p>

      <button class="adicionar">Adicionar</button>

    </div>

    <div class="produto" data-nome="Bolo De Pote" data-preco="15.00">
      <h2>Bolo De Pote</h2>
      <br>
      <img src="imag/bolo pote.jpeg" alt="bolo de pote">
      <p>Leite ninho</p>
      <button class="adicionar">Adicionar</button>
    </div>

    <div class="produto" data-nome="Brownie" data-preco="20.00">
      <h2>Brownie</h2>
      <br>
      <img src="imag/brownie.jpeg" alt="Brownie">
      <p>Brigadeiro</p>
      <button class="adicionar">Adicionar</button>
    </div>


  </div>
  <br>

  <div class="bloco2">

    <div class="produto" data-nome="Cookie" data-preco="25.00">
      <h2>Cookie</h2>
      <br>
      <img src="imag/cookies.jpeg" alt="Cookie">
      <p>Nutella</p>
      <button class="adicionar">Adicionar</button>

    </div>

    <div class="produto" data-nome="Docinhos" data-preco="40.00">
      <h2>Docinhos</h2>
      <br>
      <img src="imag/docinhos.jpeg" alt="Docinhos">
      <p></p>
      <button class="adicionar">Adicionar</button>

    </div>

    <div class="produto" data-nome="Pão De Mel" data-preco="10.00">
      <h2>Pão De Mel</h2>
      <br>
      <img src="imag/pao de mel.jpeg" alt="pão de mel">
      <p>Brigadeiro</p>
      <button class="adicionar">Adicionar</button>
    </div>

  </div>
  <br>
  <div class="bloco3">


    <div class="produto" data-nome="Tortinha De Limão" data-preco="25.00">
      <h2>Tortinha De Limão</h2>
      <br>
      <img src="imag/tortinha limao.jpeg" alt="torta">
      <button class="adicionar">Adicionar</button>
    </div>

    <div class="produto" data-nome="Torta Cookie" data-preco="50.00">
      <h2>Torta Cookie</h2>
      <br>
      <img src="imag/torta cookie.jpeg" alt="torta">
      <p>Nutella</p>
      <button class="adicionar">Adicionar</button>
    </div>

    <div class="produto" data-nome="Bolo Caseiro" data-preco="45.00">
      <h2>Bolo Caseiro</h2>
      <br>
      <img src="imag/bolo caseiro.jpeg" alt="bolo">
      <p>Cenoura </p>
      <button class="adicionar">Adicionar</button>
    </div>


  </div>

  


  <script src="js/script.js"></script>
</body>

</html>