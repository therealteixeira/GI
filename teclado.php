<!DOCTYPE html>

<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Electro Shop</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <style>
	  
	  
    body {
      background-color: #f1f1f1;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      font-size: 16px;
    }
    
  .container {
  width: 100%;
  max-width: 960px;
  margin: 0 auto;
 
  text-align: center;
  flex: 1;
  margin-top: auto;
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

    header img {
  max-width: 200px; /* Ajuste o tamanho máximo da imagem aqui */
}


    

    

    
 .cart {
      
      color: #fff;
      padding: 5px;
      display: flex;
      cursor: pointer;
      align-items: center;
      position: absolute;
      top: 50px;
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
      top: 50px;
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
  top: 50px;
  left: 10px;
}
.menu-icon:hover {
  color: #a30000; /* Cor preta ao passar o cursor */
}
    
    
    
    .sidebar {
  position: fixed;
  top: 0;
  left: -252px;
  width: 250px;
  height: 100vh;
  background-color: #333;
  border-right: 2px solid #b30000;
  color: #fff;
  transition: left 0.3s;
}

.sidebar.open {
  left: 0;
}

.sidebar h3 {
	color: #b30000;
  padding: 10px;
  margin-top: 57px;
}

.sidebar ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.sidebar li {
  padding: 10px;
  cursor: pointer;
}

.sidebar li:hover {
  background-color: #555;
}


  .product-section {
      display: flex;
      justify-content: center;
      margin-top: 100px;
    }

    .product {
      display: flex;
      align-items: center;
      text-align: left;
    }

    .product img {
      width: 300px;
      height: auto;
      margin-right: 20px;
    }

    .product-details {
      display: flex;
      flex-direction: column;
    }

    .product-name {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .product-price {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .product-description {
      font-size: 16px;
      margin-bottom: 10px;
    }

    .product-stock {
      font-size: 16px;
      color: #888;
    }

  
  
  .wrapper {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

.content {
  flex: 1;
}
  
footer {
  background-color: #333;
  color: #fff;
  padding: 10px;
  text-align: left;
  width: 100%;
  left: 0;
  box-sizing: border-box;
}


     @media screen and (max-width: 800px) {
      body {
        font-size: 12px; /* Tamanho de fonte menor para telas menores */
      }
      
      
      .container {
  overflow-y: scroll;
  padding: 5px; 
  overflow-y: auto;

}


      
      
      header img {
        max-width: 150px; /* Tamanho de imagem menor para telas menores */
      }
      
      nav {
        margin-top: 150px; /* Espaçamento menor para telas menores */
      }
      
      .campaign {
        margin-top: 50px; /* Espaçamento menor para telas menores */
      }
    }
  </style>
  
  <script>
  // Função para abrir/fechar a aba lateral
  function toggleSidebar() {
    var sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('open');
  }
</script>

</head>
<body>
  <div class="container wrapper">
    <header>
      <div class="sidebar">
        <h3>Produtos</h3>
        <ul>
          <li><a href="todos.html">Todos os produtos</a></li>
          <li>Periféricos</li>
          <li>Computadores</li>
          <li>Jogos</li>
          <li>Imagem</li>
          <li>Som</li>
          <!-- Adicione mais categorias conforme necessário -->
        </ul> 
      </div>
      <img src="logo.png" alt="Logo Electro Shop">
      <div class="menu-icon" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
      </div>
      <div class="client-area">
        <a href="login2.html">
          <i class="fas fa-user"></i>
          <span class="tooltip">Login ou criar conta</span>
        </a>
      </div>
      <div class="cart">
        <i class="fas fa-shopping-cart"></i>
      </div>
    </header>

  
    <div class="product-section">
      <div class="product">
        <img src="teclado.jpg" alt="Imagem do Produto">
        <div class="product-details">
          <div class="product-name">Teclado Gaming</div>
          <div class="product-price">19,99€</div>
          <div class="product-description">
            <p>
              Este teclado gaming possui iluminação RGB personalizável e teclas mecânicas responsivas, proporcionando uma ótima experiência de jogo.
            </p>
          </div>
          <div class="product-stock">
            <?php
            
            $db = new SQLite3('stock.db');
$produto = 'Teclado Gaming';

// Obtém a quantidade total do produto no banco de dados
$stmt = $db->prepare('SELECT SUM(quantidade) AS total FROM stock WHERE produto = produto');
$stmt->bindValue('produto', $produto, SQLITE3_TEXT);
$result = $stmt->execute();
$row = $result->fetchArray();

//$quantidadeTotal = $row['total'];


     

            if ($row) {
              $quantidadeTotal = $row['total'];
              echo 'Em stock: ' . $quantidadeTotal . ' unidades';
            } else {
              echo 'Produto não encontrado';
            }

            $db->close();
            ?>
          </div>
          
         <div class="buy-button">
          <button type="button" onclick="addToCart()">Comprar</button>
        </div>
  
        </div>
      </div>
    </div>


  <script>
    // Função para abrir/fechar a aba lateral
    function toggleSidebar() {
      var sidebar = document.querySelector('.sidebar');
      sidebar.classList.toggle('open');
    }
  </script>
  
  <script>
    function addToCart() {
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'stock.php', true);
      xhr.onload = function() {
        if (xhr.status === 200) {
          window.location.href = 'carrinho.php';
        } else {
          console.log('Erro ao atualizar o estoque');
        }
      };
      xhr.send();
    }
  </script>
  
  
</body>
</html>
