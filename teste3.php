<?php

try {
    $db = new PDO('sqlite:game_PDO2.sqlite');
    $db->exec("CREATE TABLE IF NOT EXISTS groups (id INTEGER PRIMARY KEY, name TEXT, email TEXT)");
    $db->exec("INSERT INTO groups(id, name, email) VALUES (1, 'amy', 'amy@aol.uk')");
    $db->exec("INSERT INTO groups(id, name, email) VALUES (2, 'john', 'john@aol.uk')");
    $db->exec("INSERT INTO groups(id, name, email) VALUES (3, 'emma', 'emma@aol.uk')");

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

