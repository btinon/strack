<?php
$uname="root";
$pass="";

?>

<html>
<head>
  <title>Edit Server</title>
  <style>
  </style>
</head>
<body>
  <form action="edit.php" method="post">
    Server ID: <input type="text" name="id">
    <br />
    <br />
    <br />
    <br />
    <?php
    $id = 11111;

    try
{
    $pdo = new PDO('mysql:host=localhost;dbname=strack', $uname, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare('SELECT * FROM servers WHERE server_id = :id');
    $stmt->execute(array('id' => $id));
    $result = $stmt->fetchAll();
  if ( count($result) ) {
    foreach($result as $row) {
      echo "Server Name: " . "<input type='text' name='name' value='" . $row[1] . "'><br />";
    echo "Server ID: " . "<input type='text' name='id' value='" . $row[2] . "'><br />";
    echo "RAM: " . "<input type='text' name='ram' value='" . $row[3] . "'><br />";
    echo "Drives: " . "<input type='text' name='drives' value='" . $row[4] . "'><br />";
    echo "Location: " . "<input type='text' name='loc' value='" . $row[5] . "'><br />";
    echo "U: " . "<input type='text' name='u' value='" . $row[3] . "'>";
      
    }
  } else {
    echo "No rows returned.";
  }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
    
/*
try {
  $pdo = new PDO('mysql:host=localhost;dbname=someDatabase', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo->prepare('UPDATE someTable SET name = :name WHERE id = :id');
  $stmt->execute(array(
    ':id'   => $id,
    ':name' => $name
  ));
  echo $stmt->rowCount(); // 1
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}


    ?>
    <table>
      <tr><td>Server Name: </td><td><input type="text" name="servername"></td></tr>
      <tr><td>Server ID: </td><td><input type="text" name="serverid"></td></tr>
      <tr><td>RAM: </td><td><input type="text" name="serverram"></td></tr>
      <tr><td>Drives: </td><td><input type="text" name="serverdrives"></td></tr>
      <tr><td>Location: </td><td><input type="text" name="serverloc"></td></tr>
      <tr><td>U: </td><td><input type="text" name="serveru"></td></tr>
      
      <tr><td colspan="2"><input type="submit" value="Submit"></td></tr>
    </table>
    */
    ?>
  </form>
  </body>
  </html>