

<!DOCTYPE html>
<html>
<head>
	<title>sqlite3 tutorial</title>
</head>
<body>
<center><h3>simple Sqlite3  crud tutorial in php</h3>
<!--form-->
<form action="" method="post">
	<input type="text" name="name" placeholder="name"> <br>
	<input type="text" name="email" placeholder="email"> <br>
	<input type="submit" name="submit" value="save">
</form>
<!--select data-->

<table border="1">
  <tr>
    <th>id(desc)</th>
    <th>name</th>
    <th>email</th>
    <th>edit</th>
    <th>delete</th>
  </tr>
  <?php
$select = "SELECT rowid,  * from user ORDER BY rowid DESC";
$result = $db->query($select);
while ($row = $result->fetchArray()) {
	?>
  <tr>
    <td><?php echo $row["rowid"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>

    <td><a href="edit.php?id=<?php echo $row['rowid'];?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $row['rowid'];?>">Delete</a></td>
  </tr>
  <?php
  }


?>
</table>

</center>
</body>
</html>
