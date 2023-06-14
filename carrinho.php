<!DOCTYPE html>

    
    
    <html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Electro Shop-Carrinho </title>
  
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
    
  
    header {
      height: 90px;
      background-color: #333;
      color: #fff;
      padding: 10px 15px; 
      margin: 0;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
    }

    header img {
  max-width: 200px; /* Ajuste o tamanho máximo da imagem aqui */
}

.login-link {
    position: absolute;
    top: 10px;
    right: 10px;
    color: #fff;
    font-size: 20px;
    text-decoration: none;
  }

  .logo {
  text-align: center;
 
  color: #800000;
  font-size: 40px;
  font-weight: bold;
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


    h1 {
      text-align: center;
      margin-bottom: 20px;
    }
    
    table {
      width: 90%;
      margin-bottom: 20px;
    }
    
    th, td {
      padding: 10px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f9f9f9;
    }
    
    
    
    
      
    table img {
      max-width: 150px; /* Defina o tamanho máximo das imagens aqui */
    }

    form {
      max-width: 900px;
      margin: 0 auto;
    }
    
    label {
      display: block;
      margin-bottom: 1px;
    }
    
    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 5px;
      border: 1px solid #ddd;
      border-radius: 3px;
    }
    
    input[type="number"] {
      width: 60px;
      text-align: center;
    }
    
    input[type="radio"] {
      margin-right: 5px;
    }
    
    input[type="submit"] {
      padding: 10px 20px;
      background-color: #800000;
      border: none;
      color: #fff;
      cursor: pointer;
    }
    
    input[type="submit"]:hover {
      background-color: #660000;
    }
    
    
    
@media screen and (max-width: 800px){
body {
font-size: 12px;}

nav { width: 90%; height: auto; color: white; }
table { margin-right:0; list-style-type: none; text-align: center;}
body { margin-right:0; list-style-type: none; text-align: center;}
label { margin-right:0; list-style-type: none; text-align: center;}
h1 { margin-right:0; list-style-type: none; text-align: center;}
li { border: 1px gray solid; background-color:rgb(150,20,20) }
}
@media screen and (max-width: 480px){
body {
font-size: 10px;}
nav { width: 90%; height: auto; color: white; }
table { margin-right:0; list-style-type: none; text-align: center;}
body { margin-right:0; list-style-type: none; text-align: center;}
label { margin-right:0; list-style-type: none; text-align: center;}
h1 { margin-right:0; list-style-type: none; text-align: center;}
li { border: 1px gray solid; background-color:rgb(150,20,20) }}

#texto { width: 100%; color: cyan; background-color:rgb(40,40,40)}
.cr {color: yellow}




    footer {
      background-color: #333;
      padding: 20px;
      text-align: center;
    }

    footer p {
      margin: 0;
      color: ##660000;
    }

    footer a {
      color: #CD5C5C;
      text-decoration: none;
    }

.search-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
  }
  
  .search-container input {
    width: 600px;
    padding: 20px;
  }
  
  
  

  
  
  
  
  
  </style>
  
  <header>
  
  <h1 class="logo">Electro Shop</h1>

  <!-- Adicione o ícone e o link para a página de login -->
  <a href="pagina-login.html" class="login-link">
    <i class="fas fa-user"></i>
  </a>
</header>
  
  <script>
    function updateTotal() {
      var quantity1 = document.getElementById("quantity").value;
      var quantity2 = document.getElementById("quantity2").value;

     
      if (isNaN(quantity1) || isNaN(quantity2)) {
        alert("Por favor, introduza um número válido para a quantidade.");
        return;
      }

      quantity1 = parseInt(quantity1);
      quantity2 = parseInt(quantity2);

      var price1 = 10.00; 
      var price2 = 15.00; 
      var total1 = quantity1 * price1;
      var total2 = quantity2 * price2;
      var totaltotal = total1 + total2;

      document.getElementById("total").innerText = total1.toFixed(2) + " €";
      document.getElementById("total2").innerText = total2.toFixed(2) + " €";
      document.getElementById("totaltotal").innerText = totaltotal.toFixed(2) + " €";
    }
  </script>
  
  
  
  <head>
  <!-- Restante do código -->

  <!-- Adicione o link para a biblioteca do Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>



</head>


<body>

 <div class="search-bar">
    <input type="text" placeholder="Pesquisar...">
    <button><i class="fas fa-search"></i></button>
  </div>

  <div class="content">
    <h1>Carrinho de Compras</h1>
    
    
    
<div class="search-container">
    <input type="text" id="search" name="search" placeholder="Pesquisar produtos ou categorias">
  </div>
  
  
  
  
  <h1>Carrinho de Compras</h1>
  
  <br></br>
  
  
  
  
  <table>
    <tr>
      <th></th>
      <th>Produtos</th>
      <th>Preço</th>
      <th>Quantidade</th>
      <th>Total</th>
    </tr>
    <tr>
      <td><img src="https://www.worten.pt/i/ac0a8f483d5e5f1fe1dc49e3f28de10951b2fd14.jpg" alt="Imagem Produto 1"></td>
      <td>Teclado Gaming</td>
      
      <td>10.00€</td>
      <td>
        <input type="number" id="quantity" value="1" min="1" max="10" onchange="updateTotal()">
      </td>
      <td id="total">10.00 €</td>
    </tr>
    
    <tr>
    <td>
      <img src="https://static.fnac-static.com/multimedia/Images/PT/NR/20/7d/53/5471520/1540-1.jpg" alt="Imagem Produto 2"></td>
      <td>(Produto Recomendado) <br> </br>
      Focusrite Scarlett Solo Studio 3rd Gen</td>
     
      <td>15.00€</td>
      <td>
        <input type="number" id="quantity2" value="1" min="1" max="10" onchange="updateTotal()">
      </td>
      <td id="total2">15.00 €</td>
    </tr>
    
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td id="totaltotal">25.00 €</td>
      
      
  
</tr>

  </table>
  
  
  
 <form method="POST" action="obrigado.php">
  
	

    
    <h2>Tem algum código de desconto? :D</h2>
    <label for="coupon">Código do Cupom:</label>
    <input type="text" id="coupon" name="coupon" placeholder="Digite o código do cupom"><br><br>
    
    <input type="submit" value="Aplicar Cupom">
    
  
    
    <h3>Opções de Pagamento</h3>
    <label for="card">Cartão Bancário</label>
    <input type="radio" id="card" name="payment" value="card"><br>
    
    <label for="paypal">PayPal</label>
    <input type="radio" id="paypal" name="payment" value="paypal"><br>
    
    <label for="mbway">MBWay</label>
    <input type="radio" id="mbway" name="payment" value="mbway"><br><br>
   
    
    
    
    
    <h2>Opções de Entrega</h2>
    <label for="pickup">Levantar em Loja:</label>
    <input type="radio" id="pickup" name="delivery" value="pickup"><br>
    
    (Em stock apenas na loja da Rebordosa)
    
    
    <br></br>
    <br></br>
    
   
    
    <label for="shipping">Entrega ao domicílio (portes grátis com compras acima dos 10€)</label>
    <input type="radio" id="shipping" name="delivery" value="shipping"><br><br>
    
    <label for="rua">Rua</label>
    <input type="text" id="rua" name="rua"><br><br>
        
    <label for="concelho">Concelho</label>
    <input type="text" id="concelho" name="concelho"><br><br>
    
    <label for="cdpostal">Código Postal</label>
    <input type="text" id="cdpostal" value="" maxlength="5" autocomplete="postal-code" pattern="^([0-9]{5})$">
    
    
    
    
    
    
    
    
    <h2>Informações do Cliente</h2>
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name"><br><br>
    
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email"><br><br>
    
    <label for="address">Endereço:</label>
    <textarea id="address" name="address"></textarea><br><br>
    
    
    
     
    <input type="submit" value="Finalizar Compra">
    
    
    
    
  </form>
  
  <br> </br> 
  
  <br> </br> 
 
  <script>
    function increaseQuantity() {
      var quantity = parseInt(document.getElementById("quantity").value);
      if (quantity < 10) {
        document.getElementById("quantity").
        
        

        
        
        </script>
       
       
     


  <footer>
  <div class="footer-links">
    <a href="termos-e-condicoes.html">Termos e Condições</a>
    <a href="politica-de-privacidade.html">Política de Privacidade</a>
    |
    <a href="contato.html">Contactos</a>
  </div>
  <p>&copy; 2023 Electro Shop. Todos os direitos reservados.</p>
</footer>



</body>
</html>



