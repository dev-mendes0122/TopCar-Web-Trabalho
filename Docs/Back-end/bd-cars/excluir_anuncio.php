<?php
if (!isset($_GET['id'])) {
    die("ID não fornecido.");
}

$id = $_GET['id'];

try {
    $db = new PDO('sqlite:banco_anuncio.db');

    // Apagar imagem associada (se existir)
    $stmt = $db->prepare("SELECT foto FROM anuncios WHERE id = ?");
    $stmt->execute([$id]);
    $anuncio = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($anuncio && !empty($anuncio['foto'])) {
        $caminho_foto = __DIR__ . "/imagens/" . $anuncio['foto'];
        if (file_exists($caminho_foto)) {
            unlink($caminho_foto);
        }
    }

    // Excluir do banco
    $stmt = $db->prepare("DELETE FROM anuncios WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: listar_anuncios.php");
    exit;

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
