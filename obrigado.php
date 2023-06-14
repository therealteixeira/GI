<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <h1>Muito obrigado! :D</h1>

  <?php
  // Verifica se o formulário foi enviado
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os valores dos campos do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Exibe a página de agradecimento com os detalhes do usuário
    echo "<h2>Agradecemos pela sua compra!</h2>";
    echo "<p>Olá $name !!! </p>";
    echo "<p>Mais informações foram enviadas para o seu email: $email</p>";

  
    // ...
  } else {
    // Se o formulário não foi enviado, exibe o formulário para o usuário preencher
    ?>
    <form method="POST" action="">
      <label for="name">Obrigado</label>
      <input type="text" id="name" name="name" required><br>
!!!
      <label for="email">Mais informações foram enviadas para:</label>
      <input type="email" id="email" name="email" required><br>

      <button type="submit">Finalizar Compra</button>
    </form>
    <?php
  }
  ?>
</body>
</html>

