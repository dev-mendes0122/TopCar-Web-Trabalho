<?php
try {
    $db = new PDO('sqlite:banco_anuncio.db');

    // Diretório para salvar fotos
    $dir = "Docs/Back-end/bd-cars/uploads/";
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }

    $foto_nome = basename($_FILES["foto"]["name"]);
    $foto_destino = $dir . $foto_nome;
    move_uploaded_file($_FILES["foto"]["tmp_name"], $foto_destino);

    $stmt = $db->prepare("INSERT INTO anuncios (
        modelo, descricao, valor, ano, cidade, quilometragem, cambio,
        carroceria, blindado, combustivel, placa, cor, tipo_carro, foto
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

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
        $foto_nome
    ]);

    echo "Anúncio cadastrado com sucesso!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
