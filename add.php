<?php

$name=$_POST['servername'];
$id=$_POST['serverid'];
$ram=$_POST['serverram'];
$drives=$_POST['serverdrives'];
$loc=$_POST['serverloc'];
$u=$_POST['serveru'];

$uname="root";
$pass="";

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=strack', $uname, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo->prepare('INSERT INTO servers (server_name,server_id,ram,drives,loc,u) VALUES(:name,:id,:ram,:drives,:loc,:u)');
  $stmt->execute(array(
  ':name' => $name,
  ':id' => $id,
  ':ram' => $ram,
  ':drives' => $drives,
  ':loc' => $loc,
  ':u' => $u,
  ));
  # Affected Rows?
  echo $stmt->rowCount(); // 1
  }
  catch(PDOException $e)
  {
  echo 'Error: ' . $e->getMessage();
  }
?>