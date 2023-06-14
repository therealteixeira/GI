
<?php
include "db2.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Formulário de Login</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    text-align: center;
  }
  
.container {
  max-width: 400px; 
  margin: 250px auto 0; 
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
    text-align: center;
  }
  
  .form-group {
    margin-bottom: 20px;
    color: #666;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
  }
  
  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  .show-password {
    margin-top: 10px;
    display: inline-block;
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
    input[type="password"] {
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
    input[type="password"] {
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
    <a href="index.php" class="header-text"><i class="material-icons">home</i></a>
  </div>
  <img class="logo" src="/home/therealteixeira/trabalhodeapc/P06Gestaodeinventario/images/logo.png" alt="Logo Electro Shop">
</header>


    <div class="h2">
      <h2>Iniciar a sessão na sua conta pessoal</h2>
      <form id="login-form" method="GET" action="">
        <div class="form-group">
          <label for="username">Nome de Usuário:</label>
          <input type="text" id="username" name="username" placeholder="Digite seu nome de usuário" required>
        </div>
        <div class="form-group">
          <label for="password">Senha:</label>
          <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
        </div>
        <div class="form-group">
          <input type="checkbox" id="showPassword">
          <label for="showPassword" class="show-password">Mostrar senha</label> 
          <script>

    // Show/hide password functionality
    const showPasswordCheckbox = document.getElementById('showPassword');
    const passwordInput = document.getElementById('password');

    showPasswordCheckbox.addEventListener('change', function() {
      if (showPasswordCheckbox.checked) {
        passwordInput.type = 'text';
      } else {
        passwordInput.type = 'password';
      }
    });
  </script>
        </div>
        <button type="submit" name="submit">Login</button>
      </form>
      <p>Não possui uma conta? <a href="signup.php">Crie uma agora</a></p>
    </div>

    <footer>
      <p>Entre em contato: apoio@electroshop.com | Telefone: (+351) 912 345 678</p>
      <p>&copy; 2023 Electro Shop. Todos os direitos reservados.</p>
    </footer>
  </body>
</html>

