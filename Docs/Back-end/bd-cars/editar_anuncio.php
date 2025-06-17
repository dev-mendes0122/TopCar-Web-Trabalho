<?php
$db = new PDO('sqlite:banco_anuncio.db');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // Atualiza dados no banco
    $stmt = $db->prepare("UPDATE anuncios SET 
        modelo = ?, descricao = ?, valor = ?, ano = ?, cidade = ?, quilometragem = ?, cambio = ?, carroceria = ?, 
        blindado = ?, combustivel = ?, placa = ?, cor = ?, tipo_carro = ?
        WHERE id = ?");

    $stmt->execute([
        $_POST['modelo'],
        $_POST['descricao'],
        $_POST['valor'],
        $_POST['ano'],
        $_POST['cidade'],
        $_POST['quilometragem'],
        $_POST['cambio'],
        $_POST['carroceria'],
        $_POST['blindado'],
        $_POST['combustivel'],
        $_POST['placa'],
        $_POST['cor'],
        $_POST['tipo_carro'],
        $id
    ]);

    echo "<p style='color:green;text-align:center;'>Anúncio atualizado com sucesso!</p>";
    echo "<p style='text-align:center;'><a href='listar_anuncios.php'>Voltar à lista</a></p>";
    exit;
}

// Carrega dados do anúncio
$id = $_GET['id'] ?? null;
if (!$id) {
    die("ID inválido");
}

$stmt = $db->prepare("SELECT * FROM anuncios WHERE id = ?");
$stmt->execute([$id]);
$anuncio = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$anuncio) {
    die("Anúncio não encontrado");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Anúncio</title>
    <style>
        form {
            max-width: 600px;
            margin: auto;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
        }
        input, textarea {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
        }
        button {
            padding: 10px 15px;
            background: #007bff;
            border: none;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Editar Anúncio</h2>
    <form method="post">
        <input type="hidden" name="id" value="<?= $anuncio['id'] ?>">

        <input type="text" name="modelo" placeholder="Modelo" value="<?= $anuncio['modelo'] ?>" required>
        <textarea name="descricao" placeholder="Descrição"><?= $anuncio['descricao'] ?></textarea>
        <input type="number" name="valor" placeholder="Valor" value="<?= $anuncio['valor'] ?>" required>
        <input type="number" name="ano" placeholder="Ano" value="<?= $anuncio['ano'] ?>" required>
        <input type="text" name="cidade" placeholder="Cidade" value="<?= $anuncio['cidade'] ?>" required>
        <input type="number" name="quilometragem" placeholder="KM" value="<?= $anuncio['quilometragem'] ?>">
        <input type="text" name="cambio" placeholder="Câmbio" value="<?= $anuncio['cambio'] ?>">
        <input type="text" name="carroceria" placeholder="Carroceria" value="<?= $anuncio['carroceria'] ?>">
        <input type="text" name="blindado" placeholder="Blindado" value="<?= $anuncio['blindado'] ?>">
        <input type="text" name="combustivel" placeholder="Combustível" value="<?= $anuncio['combustivel'] ?>">
        <input type="text" name="placa" placeholder="Placa" value="<?= $anuncio['placa'] ?>">
        <input type="text" name="cor" placeholder="Cor" value="<?= $anuncio['cor'] ?>">
        <input type="text" name="tipo_carro" placeholder="Tipo" value="<?= $anuncio['tipo_carro'] ?>">

        <button type="submit">Salvar Alterações</button>
    </form>
</body>
</html>
