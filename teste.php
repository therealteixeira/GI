
<html>  
<body>
  <?php
       // Connect to the SQLite database
        $this-> open("home/therealteixeira/login.db");
        $db = new SQLite3("home/therealteixeira/login.db");
        if (!$db) {
            die('Não foi possível conectar ao banco de dados SQLite.');
        }
     

        // Create the 'usuarios' table if it doesn't exist
        $table = "CREATE TABLE IF NOT EXISTS usuarios (nome TEXT NOT NULL, cc TEXT NOT NULL, senha TEXT NOT NULL);";
        $result = $db->exec($table);
        if (!$result) {
            die('Erro ao criar a tabela usuarios.');
        }
?>
</body>
</html>
