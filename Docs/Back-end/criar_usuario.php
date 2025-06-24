<?php
header("Content-Type: application/json");

// Verifica se os dados foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["erro" => "Método não permitido"]);
    exit;
}

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

// Validação básica
if (empty($email) || empty($senha)) {
    http_response_code(400);
    echo json_encode(["erro" => "E-mail e senha são obrigatórios"]);
    exit;
}

try {
    // Conecta ao banco
    $pdo = new PDO("sqlite:../usuarios.db");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verifica se o usuário já existe
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetchColumn() > 0) {
        echo json_encode(["erro" => "Usuário já cadastrado"]);
        exit;
    }

    // Criptografa a senha
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // Insere novo usuário
    $stmt = $pdo->prepare("INSERT INTO usuarios (email, senha) VALUES (?, ?)");
    $stmt->execute([$email, $senhaHash]);

    echo json_encode(["sucesso" => "Usuário cadastrado com sucesso"]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(["erro" => "Erro no banco de dados: " . $e->getMessage()]);
}
?>
