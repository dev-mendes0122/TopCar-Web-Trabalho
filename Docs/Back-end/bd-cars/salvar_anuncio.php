<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $db = new PDO('sqlite:banco_anuncios.db');

        // Processar imagem
        $nomeArquivo = $_FILES['foto']['name'];
        $caminhoTemp = $_FILES['foto']['tmp_name'];
        $destino = 'imagens/' . uniqid() . '-' . basename($nomeArquivo);

        if (move_uploaded_file($caminhoTemp, $destino)) {
            // Preparar dados
            $stmt = $db->prepare("INSERT INTO anuncios 
            (modelo, descricao, valor, ano, cidade, quilometragem, cambio, carroceria, blindado, combustivel, placa, cor, tipo_carro, foto) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->execute([
                $_POST['modelo']
                $_POST['descricao'],
                $_POST['valor'],
                $_POST['ano'],
                $_POST['cidade'],
                $_POST['quilometragem'],
                $_POST['cambio'],
                $_POST['carroceria'],
                $_POST['blindado'],
                $_POST['combustivel'],
                $_POST['placa'],
                $_POST['cor'],
                $_POST['tipo-carro'],
                $destino
            ]);

            echo "Anúncio cadastrado com sucesso!";
        } else {
            echo "Erro ao enviar a imagem.";
        }

    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>
