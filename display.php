<?php

$uname="root";
$pass="";
$id=11111;

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=strack', $uname, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare('SELECT * FROM checklist');
    $stmt->execute(array('server_id' => $id));
    $result=$stmt->fetchAll();
    if ( count($result))
    {
         
      foreach($result as $row)
      {
        echo "<hr>";
         echo "<table cellpadding=5 border=1>";
        echo "<tr>";
        echo "<td>" . "<center>"."Server Name: </td><td>".$row[1]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Server ID: </td><td>".$row[2]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Server RAM: </td><td>".$row[3]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Server Drives: </td><td>".$row[4]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Server Racked?: </td><td>".$row[5]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Server Location: </td><td>".$row[6]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Server U: </td><td>".$row[7]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Server Labeled?: </td><td>".$row[8]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Server Cabled?: </td><td>".$row[9]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Server Inventoried?: </td><td>".$row[10]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Server Built?: </td><td>".$row[11]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Server Post?: </td><td>".$row[12]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Server Live?: </td><td>".$row[13]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Server Notes: </td><td>".$row[14]."</td>";
        echo "</tr>";

        echo "</table>";
        
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