<?php
try {
    $db = new PDO('sqlite:banco_anuncio.db');
    $result = $db->query("SELECT * FROM anuncios");

    echo "<!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <title>Anúncios Cadastrados</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                padding: 20px;
                background-color: #f8f8f8;
            }
            table {
                border-collapse: collapse;
                width: 100%;
                margin-top: 20px;
                background: #fff;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            th, td {
                border: 1px solid #ccc;
                padding: 10px;
                text-align: left;
            }
            img {
                max-width: 150px;
                height: auto;
            }
            .actions a {
                margin-right: 10px;
                text-decoration: none;
                color: white;
                background-color: #007bff;
                padding: 6px 10px;
                border-radius: 5px;
            }
            .actions a.delete {
                background-color: #dc3545;
            }
        </style>
    </head>
    <body>
    <h2>Lista de Anúncios Cadastrados</h2>
    <table>
    <tr>
        <th>ID</th>
        <th>Modelo</th>
        <th>Descrição</th>
        <th>Valor</th>
        <th>Ano</th>
        <th>Cidade</th>
        <th>KM</th>
        <th>Câmbio</th>
        <th>Carroceria</th>
        <th>Blindado</th>
        <th>Combustível</th>
        <th>Placa</th>
        <th>Cor</th>
        <th>Tipo</th>
        <th>Foto</th>
        <th>Ações</th>
    </tr>";

    foreach ($result as $row) {
        $caminho_fisico = __DIR__ . "/imagens/" . $row['foto'];
        $caminho_url = "Back-end/bd-cars/imagens/" . $row['foto']; // ajuste conforme a estrutura do seu projeto

        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['modelo']}</td>
            <td>{$row['descricao']}</td>
            <td>R$ {$row['valor']}</td>
            <td>{$row['ano']}</td>
            <td>{$row['cidade']}</td>
            <td>{$row['quilometragem']}</td>
            <td>{$row['cambio']}</td>
            <td>{$row['carroceria']}</td>
            <td>{$row['blindado']}</td>
            <td>{$row['combustivel']}</td>
            <td>{$row['placa']}</td>
            <td>{$row['cor']}</td>
            <td>{$row['tipo_carro']}</td>
            <td>";

        if (!empty($row['foto']) && file_exists($caminho_fisico)) {
            echo "<img src='{$caminho_url}' alt='Foto do carro'>";
        } else {
            echo "Sem imagem";
        }

        echo "</td>
            <td class='actions'>
                <a href='editar_anuncio.php?id={$row['id']}'>Editar</a>
                <a href='excluir_anuncio.php?id={$row['id']}' class='delete' onclick=\"return confirm('Tem certeza que deseja excluir este anúncio?')\">Excluir</a>
            </td>
        </tr>";
    }
    

    echo "</table></body></html>";

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
