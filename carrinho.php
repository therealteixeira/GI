<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrinho de Compras</title>
</head>
<body>
  <h1>Carrinho de Compras</h1>

  <?php
  session_start();

  if (isset($_SESSION['produto'])) {
    $produto = $_SESSION['produto'];
    echo "<p>Produto no carrinho: $produto</p>";
  } else {
    echo "<p>Nenhum produto no carrinho</p>";
  }
  ?>

  <form action="finalizar.php" method="POST">
    <input type="submit" value="Finalizar Compra" <?php if (!isset($_SESSION['produto'])) echo 'disabled'; ?>>
  </form>
</body>
</html>
