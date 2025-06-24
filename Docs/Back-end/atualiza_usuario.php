<?php
header("Content-Type: application/json");

try {
    $pdo = new PDO("sqlite:usuarios.db");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_POST['id'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (!$id || !$email || !$senha) {
        throw new Exception("Todos os campos são obrigatórios");
    }

    $stmt = $pdo->prepare("UPDATE usuarios SET email = ?, senha = ? WHERE id = ?");
    $stmt->execute([$email, $senha, $id]);

    echo json_encode(["mensagem" => "Usuário atualizado com sucesso"]);
} catch (Exception $e) {
    http_response_code(400);
    echo json_encode(["erro" => $e->getMessage()]);
}
