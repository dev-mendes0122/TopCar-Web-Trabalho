<?php
session_start();

$email = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

try {
    //conexão com banco sqlite
    $db = new PDO("sqlite:" . __DIR__ . "/usuarios.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // busca o usuário pelo email
    $stmt = $db->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && $usuario['senha'] === $senha) {
        $_SESSION['usuario'] = $email;
        echo "sucesso";
    } else {
        echo "Usuário ou senha inválidos.";
    }

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
