<?php
try {
    $db = new PDO('sqlite:banco_anuncio.db');

    $result = $db->query("SELECT * FROM anuncios")->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($result);

} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
