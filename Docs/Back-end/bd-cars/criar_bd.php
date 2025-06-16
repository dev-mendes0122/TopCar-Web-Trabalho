<?php
try {
    $pdo = new PDO('sqlite:banco_anuncio.db');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE IF NOT EXISTS anuncios (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
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
        foto TEXT -- nova coluna adicionada
    )";

    $pdo->exec($sql);
    echo "Banco e tabela criados com sucesso.";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
