<?php
try {
    $db = new PDO('sqlite:banco_anuncios.db');
    $result = $db->query("SELECT * FROM anuncios");

    echo "<!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <title>Anúncios Cadastrados</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
                margin-top: 20px;
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
        </style>
    </head>
    <body>
    <h2>Lista de Anúncios Cadastrados</h2>
    <table>
    <tr>
        <th>ID</th>
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
    </tr>";

    foreach ($result as $row) {
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

        if (!empty($row['foto']) && file_exists($row['foto'])) {
            echo "<img src='../../{$row['foto']}' alt='Foto do carro'>";
        } else {
            echo "Sem imagem";
        }

        echo "</td></tr>";
    }

    echo "</table></body></html>";

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
