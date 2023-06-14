<?php

try {
    $file = '/var/www/html/game_PDO.sqlite';

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
    
    $db->exec("CREATE TABLE IF NOT EXISTS logsfinal (name TEXT, login_time DATETIME)");
    if (!$file) {
        die("Erro ao criar a tabela logsfinal.");
    }

    if (isset($_GET["submit"])) {
        $username = $_GET['username'];
        $password = $_GET['password'];

        $stmt = $db->prepare("SELECT * FROM dadosacesso2 WHERE cc = :username AND senha = :password");
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);

        $result = $stmt->execute();

        if (!$result) {
            die('Erro na leitura de dados ' . $stmt->errorInfo()[2]);
        }

        if ($stmt->fetch(PDO::FETCH_ASSOC)) {
            $nome = $_GET["username"];
            $loginTime = date('Y-m-d H:i:s');
            if (!$loginTime) {
                die('Erro na leitura de dados ' . $stmt->errorInfo()[2]);
            }

            $sql = "INSERT INTO logsfinal (name, login_time) VALUES (:nome, :login_time)";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':login_time', $loginTime);

            $insertResult = $stmt->execute();
            if (!$insertResult) {
                die('Erro na inserção dos dados: ' . $stmt->errorInfo()[2]);
            }

            echo "<script>alert('Iniciou a sessão corretamente');</script>";
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
