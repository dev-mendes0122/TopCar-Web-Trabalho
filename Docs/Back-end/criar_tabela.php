<?php
try {
    $pdo = new PDO("sqlite:../usuarios.db");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("CREATE TABLE IF NOT EXISTS usuarios (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        email TEXT NOT NULL UNIQUE,
        senha TEXT NOT NULL
    )");

    echo "Tabela 'usuarios' criada (ou já existente).";
} catch (PDOException $e) {
    echo "Erro ao criar tabela: " . $e->getMessage();
}
?>
