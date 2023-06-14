<!DOCTYPE html>
<html>
<head>
  <title>Criar Nova Conta</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      text-align: center;
    }
    
    .container {
      max-width: 400px;
      margin: 200px auto 0; 
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
  .header {
  background-color: #333;
  color: #fff;
  padding: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}


  header {
    background-color: #333;
    color: #fff;
    padding: 10px;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
  }
  
  .header-left {
  display: flex;
  align-items: center;
  justify-content: right; /* Add this line */
}

.header-text {
  margin-left: 10px;
  font-size: 25px;
  font-weight: bold;
  color: #fff;
  padding: 5px 10px;
  border-radius: 4px;
  text-decoration: none;
  background-color: #333;
}


.header-button {
  margin-right: 10px;
  padding: 5px 10px;
  background-color: #fff;
  color: #333;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.logo {
  width: 200px;
  margin-top: -40px;
  margin-bottom: 0px;
    margin-left: 0px;
}

    h2 {
      color: #333;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      margin-bottom: 5px;
      color: #666;
    }
    
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="cc"],
    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    .role-select {
      margin-top: 10px;
    }
    
    .show-password {
      margin-top: 10px;
      display: inline-block;
    }
    
      @media screen and (max-width: 768px) {
    .container {
      padding: 10px;
    }
    
    h2 {
      font-size: 10px;
    }
    
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="cc"]
     {
      padding: 5px;
    }
    
    .show-password {
      font-size: 12px;
    }
  }
  
    footer {
  background-color: #333;
  color: #fff;
  padding: 20px;
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: left; /* Adiciona esta linha para alinhar o texto à esquerda */
	}
    @media screen and (max-width: 768px) {
    .container {
      padding: 10px;
      margin: 150px auto 0; 
      font-size: 15px;
    }
    
    h2 {
      font-size: 20px;
    }
    
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="cc"]
     {
      padding: 10px;
    }
    
    .show-password {
      font-size: 15px;
    }
   
    header {
    padding: 5px; /* Diminui o padding do header */
  }
  
  .logo {
    width: 150px; /* Diminui o tamanho do logo */
  }
  
  footer {
    padding: 10px; /* Diminui o padding do footer */
    font-size: 12px; /* Diminui o tamanho da fonte do footer */
  }
}
  }
  
  @media screen and (max-width: 480px) {
    .container {
      padding: 10px;
      margin: 25px auto 0; /* Diminui a margem superior para 25px */
      font-size: 10px;
    }
    
    h2 {
      font-size: 15px;
    }
    
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="cc"]
     {
      padding: 5px;
    }
   
    .show-password {
      font-size: 10px;
    }
    
     header {
    padding: 2px; /* Diminui ainda mais o padding do header */
  }
  
  .logo {
    width: 100px; /* Diminui ainda mais o tamanho do logo */
  }
  
  footer {
    padding: 5px; /* Diminui ainda mais o padding do footer */
    font-size: 10px; /* Diminui ainda mais o tamanho da fonte do footer */
  }
  }
  


  </style>
</head>
<body>
  <div class="container">
<header>
  <div class="header-left">
    <a href="index.html" class="header-text"><i class="material-icons">home</i></a>
  </div>
  <img class="logo" src="/home/therealteixeira/trabalhodeapc/P06Gestaodeinventario/images/logo.png" alt="Logo Electro Shop">
</header>

<div class="h2">
    <h2>Criar Nova Conta de funcionário</h2>
     <form method="GET" action="signup.php">
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" placeholder="Digite seu nome" required>
      </div>
      <div class="form-group">
        <label for="cc">Nº de CC:</label>
        <input type="cc" id="cc" name="cc" placeholder="Digite o número do seu cartão de cidadão" required>
      </div>     
      <div class="form-group">
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
      </div>
      <div class="form-group">
        <label for="confirmPassword">Confirmar Senha:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirme sua senha" required>
      </div>
      <button type="submit">Criar Conta</button>
    </form>
  </div>
   <footer>
      <p>Entre em contato: apoio@electroshop.com | Telefone: (+351) 912 345 678</p>
      <p>&copy; 2023 Electro Shop. Todos os direitos reservados.</p>
    </footer>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['name']) && isset($_GET['cc']) && isset($_GET['password']) && isset($_GET['confirmPassword'])) {
        $nome = $_GET['name'];
        $cc = $_GET['cc'];
        $senha = $_GET['password'];
        $confirmSenha = $_GET['confirmPassword'];

        // Check if password and confirm password match
        if ($senha !== $confirmSenha) {
            die('A senha e a confirmação de senha não coincidem.');
        }

        // Connect to the SQLite database
        $db = new SQLite3('login.db');
        if (!$db) {
            die('Não foi possível conectar ao banco de dados SQLite.');
        }

        // Create the 'usuarios' table if it doesn't exist
        $query = "CREATE TABLE IF NOT EXISTS usuarios (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            nome TEXT NOT NULL,
            cc TEXT NOT NULL,
            senha TEXT NOT NULL
        )";
        $result = $db->exec($query);
        if (!$result) {
            die('Erro ao criar a tabela usuarios.');
        }

        // Insert the data into the 'usuarios' table
        $query = "INSERT INTO usuarios (nome, cc, senha) VALUES (:nome, :cc, :senha)";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':nome', $nome, SQLITE3_TEXT);
        $stmt->bindValue(':cc', $cc, SQLITE3_TEXT);
        $stmt->bindValue(':senha', $senha, SQLITE3_TEXT);
        $result = $stmt->execute();

        if (!$result) {
            die('Erro ao inserir os dados no banco de dados.');
        }

        // Close the database connection
        $db->close();

        // Redirect to the login page
        header('Location: login.php');
        exit;
    } else {
        die('Dados do formulário ausentes.');
    }
} else {
    die('Método de requisição inválido.');
}
?>




  </body>
</html>


