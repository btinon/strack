<?php

$uname="root";
$pass="";
$id=11111;

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=strack', $uname, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare('SELECT * FROM servers');
    $stmt->execute(array('server_id' => $id));
    $result=$stmt->fetchAll();
    if ( count($result))
    {
      foreach($result as $row)
      {
        echo "<hr>";
        echo "<h2>";
        echo "Server Name: \t";
        echo $row[1];
        echo "</h2><h3>";
        echo "Server ID: \t";
        echo $row[2];
        echo "<br />";
        echo "RAM: \t";
        echo $row[3];
        echo "<br />";
        echo "Drives: \t";
        echo $row[4];
        echo "<br />";
        echo "Location: \t";
        echo $row[6];
        echo "<br />";
        echo "U: \t";
        echo $row[7];
        echo "<br />";
        echo "</h3>";
      }
    }
    else
    {
      echo "No rows returned.";
    }
}
catch(PDOException $e)
{
  echo 'ERROR: ' . $e->getMessage();
}