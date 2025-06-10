<?php
header("Content-Type: application/json");

try {
    $pdo = new PDO("sqlite:usuarios.db");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_POST['id'] ?? '';

    if (!$id) {
        throw new Exception("ID do usuário é obrigatório");
    }

    $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->execute([$id]);

    echo json_encode(["mensagem" => "Usuário excluído com sucesso"]);
} catch (Exception $e) {
    http_response_code(400);
    echo json_encode(["erro" => $e->getMessage()]);
}
