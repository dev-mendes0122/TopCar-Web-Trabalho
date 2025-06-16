<?php
try {
    $db = new PDO('sqlite:banco_anuncio.db');

    $sql = "CREATE TABLE IF NOT EXISTS anuncios (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        modelo TEXT,
        descricao TEXT,
        valor REAL,
        ano INTEGER,
        cidade TEXT,
        quilometragem INTEGER,
        cambio TEXT,
        carroceria TEXT,
        blindado TEXT,
        combustivel TEXT,
        placa TEXT,
        cor TEXT,
        tipo_carro TEXT,
        foto TEXT
    )";

    $db->exec($sql);
    echo "Banco e tabela criados com sucesso!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
