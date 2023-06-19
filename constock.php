<?php
$db = new SQLite3('stock.db');

// Consulta para recuperar os registros da tabela stock
$result = $db->query('SELECT produto, quantidade FROM stock');

// Exibe os resultados da consulta
while ($row = $result->fetchArray()) {
    echo 'Produto: ' . $row['produto'] . '<br>';
    echo 'Quantidade: ' . $row['quantidade'] . '<br><br>';
}

$db->close();
?>
