<?php
$db = new PDO('sqlite:banco_anuncio.db');
$result = $db->query("SELECT * FROM anuncios");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Anúncios</title>

    <link rel="stylesheet" href="../../Front-end/Styles/common-style.css">
    <link rel="stylesheet" href="../../Front-end/Styles/style-main-page.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <header class="flex">
    <nav class="flex nav-links-right">
      <a href="login.html">
      <img src="../../Front-end/assets/login icon.svg" alt="login.png">
      </a>
      <img src="../../Front-end/assets/br.png" alt="lang.png">
      
  </nav>
  </header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="navbar-brand">
              <img src="../../Front-end/assets/Logo 1.png" alt="Logo" class="logo">
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
            <a class="nav-link" href="../../Front-end/carrospasseio.html">Carros de Passeio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../Front-end/carrospremium.html">Carros Premium</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../Front-end/supercarros.html">Super Carros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../Front-end/anuncie.html">Anuncie Aqui</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="carros_disponiveis.php">Carros anunciados</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <h1 style="text-align: center;">Anunciados</h1>
    <div class="container">
        <?php foreach ($result as $carro): 
            $foto = !empty($carro['foto']) && file_exists(__DIR__ . "/imagens/" . $carro['foto']) 
                ? "imagens/" . $carro['foto'] 
                : "https://via.placeholder.com/300x180?text=Sem+Imagem";
        ?>
        <div class="carro">
            <img src="<?= $foto ?>" alt="Foto do carro">
            <div class="info">
                <h3><?= htmlspecialchars($carro['modelo']) ?> (<?= $carro['ano'] ?>)</h3>
                <p><?= htmlspecialchars($carro['descricao']) ?></p>
                <p>KM: <?= $carro['quilometragem'] ?> | Câmbio: <?= $carro['cambio'] ?></p>
                <p>Combustível: <?= $carro['combustivel'] ?> | Cor: <?= $carro['cor'] ?></p>
                <p class="preco">R$ <?= number_format($carro['valor'], 2, ',', '.') ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
