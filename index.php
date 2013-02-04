<?php

$uname="root";
$pass="";

try
{
  $conn = new PDO('mysql:host=localhost;dbname=strack', $uname, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
  catch (PDOException $e)
  {
    echo 'ERROR: ' . $e->getMessage();
  }
  if (!$conn) {echo"blah didn't work";}
  else {echo "yahooooo it worked!";}
?>