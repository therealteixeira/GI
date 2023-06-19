

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $db = new SQLite3('stock.db');
  $produto = 'Teclado Gaming';

  // Obtém a quantidade atual do produto no banco de dados
  $stmt = $db->prepare('SELECT quantidade FROM stock WHERE produto = :produto');
  $stmt->bindValue(':produto', $produto, SQLITE3_TEXT);
  $result = $stmt->execute();
  $row = $result->fetchArray();

  if ($row) {
    $quantidadeAtual = $row['quantidade'];
    $novaQuantidade = $quantidadeAtual - 1;

    if ($novaQuantidade >= 0) {
      // Atualiza a quantidade do produto no banco de dados
      $stmt = $db->prepare('UPDATE stock SET quantidade = :novaQuantidade WHERE produto = :produto');
      $stmt->bindValue(':novaQuantidade', $novaQuantidade, SQLITE3_INTEGER);
      $stmt->bindValue(':produto', $produto, SQLITE3_TEXT);
      $stmt->execute();
    }
  }

  $db->close();

  // Retorna uma resposta de sucesso (status 200) para a solicitação POST
  http_response_code(200);

  // Redireciona de volta para a página do produto
  header('Location: teclado.php');
  exit;
}
?>
