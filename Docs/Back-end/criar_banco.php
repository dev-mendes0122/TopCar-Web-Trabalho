<?php
try {
    $db = new PDO("sqlite:" . __DIR__ . "/usuarios.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec("CREATE TABLE IF NOT EXISTS usuarios (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        email TEXT UNIQUE NOT NULL,
        senha TEXT NOT NULL
    )");

    echo "Banco de dados criado com sucesso!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
