<?php
try {
    $db = new PDO('sqlite:banco_anuncios.db'); // cria na mesma pasta
    $db->exec("CREATE TABLE IF NOT EXISTS anuncios (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        descricao TEXT NOT NULL,
        valor REAL NOT NULL,
        ano INTEGER NOT NULL,
        cidade TEXT NOT NULL,
        quilometragem INTEGER NOT NULL,
        cambio TEXT NOT NULL,
        carroceria TEXT NOT NULL,
        blindado TEXT NOT NULL,
        combustivel TEXT NOT NULL,
        placa TEXT NOT NULL,
        cor TEXT NOT NULL,
        tipo_carro TEXT NOT NULL
    )");
    echo "Banco e tabela criados!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
