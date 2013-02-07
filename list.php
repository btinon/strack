<?php

$uname="root";
$pass="";
$id=11111;

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=strack', $uname, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare('SELECT * FROM server');
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
        echo "<td>" . "<center>"."Service Tag: </td><td>".$row[3]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Asset Tag: </td><td>".$row[4]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Model: </td><td>".$row[5]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Rack: </td><td>".$row[6]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Rack U: </td><td>".$row[7]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."RAM: </td><td>".$row[8]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Drives: </td><td>".$row[9]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."RAID: </td><td>".$row[10]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Domain: </td><td>".$row[11]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."FQDN: </td><td>".$row[12]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."IP: </td><td>".$row[13]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Bond0: </td><td>".$row[14]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Netmask: </td><td>".$row[15]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Gateway: </td><td>".$row[16]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."VLAN: </td><td>".$row[17]."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "<center>"."Tech Notes: </td><td>".$row[18]."</td>";
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
?>