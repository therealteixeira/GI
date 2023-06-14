<?php

try {
    $file =  '/var/www/html/game_PDO.sqlite';

    if (!file_exists($file)) {
        $handle = fopen($file, 'w');
        fclose($handle);
    }

    if (file_exists($file)) {
        echo "The file exists.";
    } else {
        echo "The file does not exist.";
    }

    $db = new PDO('sqlite:/var/www/html/game_PDO.sqlite');
    if (!$db) {
        die("Não foi possível conectar ao banco de dados SQLite.");
    }

    $db->exec("CREATE TABLE IF NOT EXISTS dadosacesso2 (name TEXT, cc TEXT, senha TEXT)");
    if (!$file) {
        die("Erro ao criar a tabela dadosacesso.");
    }

    if (isset($_GET["submit"])) {
        $nome = $_GET["name"];
        $cc = $_GET["cc"];
        $senha =$_GET["password"];
        $confirmSenha = $_GET["confirmPassword"];

        if ($senha !== $confirmSenha) {
            die("Senhas não correspondem.");
        }

        $sql = "INSERT INTO dadosacesso2 (name, cc, senha) VALUES (:nome, :cc, :senha)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cc', $cc);
        $stmt->bindParam(':senha', $senha);
        
        $insertResult = $stmt->execute();
        if (!$insertResult) {
            die('Erro na inserção dos dados: ' . $stmt->errorInfo()[2]);
        }

        echo "Inserção realizada com sucesso!";
    }
    
} catch (PDOException $e) {
    echo $e->getMessage();
}


?>


