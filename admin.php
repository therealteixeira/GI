<?php
// Conexão com o banco de dados
$db = new SQLite3('stock.db');

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Atualiza as quantidades dos produtos no banco de dados
  foreach ($_POST['quantidade'] as $produto => $novaQuantidade) {
    $stmt = $db->prepare('UPDATE estoque SET quantidade = :novaQuantidade WHERE produto = :produto');
    $stmt->bindValue(':novaQuantidade', $novaQuantidade, SQLITE3_INTEGER);
    $stmt->bindValue(':produto', $produto, SQLITE3_TEXT);
    $stmt->execute();
  }
}

// Obtém os produtos e suas quantidades do banco de dados
$result = $db->query('SELECT produto, quantidade FROM estoque');
$stock = [];
while ($row = $result->fetchArray()) {
  $stock[$row['produto']] = $row['quantidade'];
}

$db->close();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administração - Stock</title>
  <style>
    table {
      border-collapse: collapse;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 5px;
    }
  </style>
</head>
<body>
  <h1>Administração - stock</h1>

  <form action="admin.php" method="post">
    <table>
      <thead>
        <tr>
          <th>Produto</th>
          <th>Quantidade</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($stock as $produto => $quantidade) : ?>
          <tr>
            <td><?php echo $produto; ?></td>
            <td><input type="number" name="quantidade[<?php echo $produto; ?>]" value="<?php echo $quantidade; ?>"></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <br>
    <input type="submit" value="Atualizar">
  </form>
</body>
</html>
