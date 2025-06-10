<?php
header("Content-Type: application/json");

try {
    $pdo = new PDO("sqlite:usuarios.db"); // corrigido aqui
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT id, email FROM usuarios");
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($usuarios);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(["erro" => "Erro ao acessar o banco de dados", "detalhe" => $e->getMessage()]);
}
?>
