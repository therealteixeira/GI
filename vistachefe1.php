<!DOCTYPE html>

<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Electro Shop</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <style>
	  
  body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      text-align: center;
    }
    
     .container {
      max-width: 1000px;
      margin: 200px auto 0; 
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }


    .header {
   background-color: #333;
  color: #fff;
  padding: 10px 20px;
  margin: 0;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
    header {
      background-color: #333;
      color: #fff;
      padding: 10px 15px; /* Ajuste a altura aqui */
      margin: 0;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
    }

.logo {
  width: 150px;
}
  
  
.cart {
      
      color: #fff;
      padding: 5px;
      display: flex;
      cursor: pointer;
      align-items: center;
      position: absolute;
      top: 30px;
      right: 10px;
      font-size: 32px;
      margin-right: 5px;
    }

.cart:hover  {
  color: #a30000; 
}


.client-area {
   
      color: #fff;
      padding: 5px;
      display: flex;
      cursor: pointer;
      align-items: center;
      position: absolute;
      top: 30px;
      right: 60px;
      font-size: 32px;
	  margin-right: 5px;
       
 
}

.client-area:hover i {
  color: #a30000; /* Cor preta ao passar o cursor */
}

.tooltip {
  visibility: hidden;
  opacity: 0;
  background-color: #333;
  color: #fff;
  padding: 5px 10px;
  border-radius: 4px;
  position: absolute;
  top: 30px;
  left: 50%;
  transform: translateX(-50%);
  transition: opacity 0.3s;
  font-size:10px;
}

.client-area a {
  color: #fff;
  text-decoration: none;
}

.client-area:hover .tooltip {
  visibility: visible;
  opacity: 1;
}

.menu-icon {
  color: #fff;
  font-size: 32px;
  padding: 10px;
  cursor: pointer;
  position: fixed;
  top: 30px;
  left: 10px;
}
.menu-icon:hover {
  color: #a30000; /* Cor preta ao passar o cursor */
}
    
    .campaign {
      background-color: #a30000;
      color: #fff;
      padding: 20px;
      margin-top: 20px;
    }
    
    .sidebar {
  position: fixed;
  top: -100px;
  left: -315px;
  width: 310px;
  height: 100vh;
  background-color: #333;
  border-right: 2px solid #b30000;
  color: #fff;
  transition: left 0.3s;
}

.sidebar.open {
  left: 0px;
}

.sidebar h3 {
	color: #b30000;
  padding: 10px;
  margin-top: 57px;
}

.sidebar ul {
  list-style-type: none;
  padding: 75px;
  margin: 5px;
   font-size: 20px;
  font-weight: bold;
  color: #fff;
}

.sidebar li {
  padding: 10px;
  cursor: pointer;
}

.sidebar li:hover {
  background-color: #555;
}

  .wrapper {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

.content {
  flex: 1;
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
    input[type="number"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    

        footer {
  background-color: #333;
  color: #fff;
  padding: 20px;
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  
  text-align: left; 
  }
    
   
      @media screen and (max-width: 768px) {
    .container {
      padding: 10px;
    }
    
    h2 {
      font-size: 10px;
    }
    
    input[type="text"],
    input[type="number"] {
      padding: 5px;
    }
    
    
  }
   @media screen and (max-width: 480px) {
    .container {
      padding: 5px;
    }
    
    h2 {
      font-size: 5px;
    }
    
    input[type="text"],
    input[type="number"] {
      padding: 3px;
    }
    
  
  }
  </style>
</head>
<body>
  <div class="container wrapper">
    <header>
      <div class="sidebar">
        <h3>Produtos</h3>
        <ul>
          <li>System Log</li>
          <li>Add&remove products</li>
          <!-- Adicione mais categorias conforme necessário -->
        </ul>
      </div>
      <img class="logo" src="/home/therealteixeira/trabalhodeapc/P06Gestaodeinventario/images/logo.png" alt="Logo Electro Shop">
      <div class="menu-icon" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
      </div>
      <div class="client-area">
        <a href="/home/therealteixeira/trabalhodeapc/P06Gestaodeinventario/Páginas/login2.html">
          <i class="fas fa-user"></i>
          <span class="tooltip">Login ou criar conta</span>
        </a>
      </div>
      <div class="cart">
        <i class="fas fa-shopping-cart"></i>
      </div>
    </header>
    
    
 <h2>Gestão de produto</h2>
  <h3>Adiciona um produto</h3>
  <form id="addProductForm">
      <div class="form-group">
        <label for="productName">Nome do produto:</label>
        <input type="text" id="productName" name="productName" placeholder="Adiciona o nome do produto" required>
      </div>
      <div class="form-group">
        <label for="productCategory">Categoria do produto:</label>
        <select id="productCategory" name="productCategory" required>
          <option value="">Seleciona a categoria</option>
          <option value="componentes">Componentes</option>
          <option value="perifericos">Perifericos</option>
          <option value="imagem e som">imagem e som</option>
        </select>
      </div>
      <div class="form-group">
        <label for="productPrice">Preço do produto:</label>
        <input type="number" min="0" step=".01" id="productPrice" name="productPrice" placeholder="Introduz o preço" required>
   <div class="form-group">
      <label for="productImage">Imagem do produto:</label>
      <input type="file" id="productImage" name="productImage" accept="image/*">
      <label for="productImage" class="custom-upload">
        <i class="material-icons">cloud_upload</i> Selecione uma imagem
      </label>
    </div>
  <div id="productList"></div>
      <button type="submit">Adicionar produto</button>
    </form>
	<h3>Lista de produtos</h3>
   </div>
  
  
   <footer>
      <p>Entre em contato: apoio@electroshop.com | Telefone: (+351) 912 345 678</p>
      <p>&copy; 2023 Electro Shop. Todos os direitos reservados.</p>
    </footer>
 
    <script>
    // Função para abrir/fechar a aba lateral
    function toggleSidebar() {
      var sidebar = document.querySelector('.sidebar');
      sidebar.classList.toggle('open');
    }
  </script>
</body>
</html>


