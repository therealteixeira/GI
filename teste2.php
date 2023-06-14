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

    $db->exec("CREATE TABLE IF NOT EXISTS groups (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, email TEXT)");
    $db->exec("INSERT INTO groups(name, email) VALUES ('amy', 'amy@aol.uk')");
    $db->exec("INSERT INTO groups(name, email) VALUES ('john', 'john@aol.uk')");
    $db->exec("INSERT INTO groups(name, email) VALUES ('emma', 'emma@aol.uk')");

    print "<table border=1>";
    print "<tr><td>ID</td><td>Name</td><td>Email</td>";

    $result = $db->query('SELECT * FROM groups');

    foreach ($result as $row) {
        print "<tr><td>" . $row['id'] . "</td>";
        print "<td>" . $row['name'] . "</td>";
        print "<td>" . $row['email'] . "</td></tr>";
    }

    print "</table>";
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>


