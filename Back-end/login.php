<?php
// login.php

// Simulação de banco de dados (só pra teste)
$usuarios = [
    "teste@email.com" => "123456",
    "admin@carros.com" => "admin123"
];

// Recebe os dados enviados via POST
$email = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

// Valida se o usuário existe
if (isset($usuarios[$email])) {
    if ($usuarios[$email] === $senha) {
        echo "sucesso";
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Usuário não encontrado.";
}
?>
