<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopCar Motors</title>
    <link rel="icon" href="assets/site-icon.svg">
    <link rel="stylesheet" href="Styles/style-main-page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
  <header class="flex">
    <nav class="flex nav-links-right">
      <a href="login.html">
      <img src="assets/login icon.svg" alt="login.png">
      </a>
      <img src="assets/br.png" alt="lang.png">
      
  </nav>
  </header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="navbar-brand">
              <img src="assets/Logo 1.png" alt="Logo" class="logo">
            </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="nav_bar collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="main-page.html">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="carrospasseio.html">Carros de Passeio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="carrospremium.html">Carros Premium</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="supercarros.html">Super Carros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="anuncie.html">Anuncie Aqui</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <main class="flex">
        <div class="flex main-ad">
            <img class="main-car" src="assets/carros/camaro transparent.avif" alt="">
            <a class="botao" href="carro.html">ADQUIRIR</a>
            <div class="flex highlights-space">
                <div class="flex highlights">
                    <p>MOTOR 6.2L V8</p>
                    <p>Performance</p>
                </div>
                <div class="flex highlights">
                    <p>RALLY STRIPES</p>
                    <p>Design</p>
                </div>
                <div class="flex highlights">
                    <p>PROJEÇÃO PARA-BRISA</p>
                    <p>Tecnologia</p>
                </div>
                <div class="flex highlights no-border-right">
                    <p>SÉRIE ICÔNICA</p>
                    <p>Exclusividade</p>
                </div>

            </div>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>