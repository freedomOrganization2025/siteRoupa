<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header>
    <div class="menu-icon">&#9776;</div>
    <div class="logo">F <span>FREEDOM</span></div>
    <div class="icons">
      <span class="icon">&#128269;</span>
      <span class="icon">&#128722;<sup>0</sup></span>
    </div>
  </header>

  <section class="banner">
    <img src="https://picsum.photos/200/300" alt="Banner Freedom" />
  </section>

  <section class="produtos">
    <h2>Nossos Produtos</h2>
    <div class="carrossel">
      <button class="prev">&#10094;</button>
      <div class="produtos-container">
        <div class="produto">
          <span class="desconto">-12% OFF</span>
          <img src="https://picsum.photos/200/300" alt="Caneca Freedom" />
        </div>
        <div class="produto">
          <img src="https://picsum.photos/200/300" alt="Mochila Freedom" />
        </div>
        <div class="produto">
          <img src="https://picsum.photos/200/300" alt="Boné Freedom" />
        </div>
      </div>
      <button class="next">&#10095;</button>
    </div>
    <div class="preco">R$88,76 <del>R$99,00</del></div>
    <button class="comprar">Comprar</button>
  </section>
</body>
</html>