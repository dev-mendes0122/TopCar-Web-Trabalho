<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

if (!$email || !$senha) {
    echo "Preencha todos os campos.";
    exit;
}

try {
    $db = new PDO("sqlite:usuarios.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $db->prepare("INSERT INTO usuarios (email, senha) VALUES (:email, :senha)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha); // Em um projeto real, use password_hash()

    $stmt->execute();

    echo "Cadastro realizado com sucesso!";
} catch (PDOException $e) {
    if ($e->getCode() === '23000') {
        echo "Este e-mail já está cadastrado.";
    } else {
        echo "Erro: " . $e->getMessage();
    }
}
?>
