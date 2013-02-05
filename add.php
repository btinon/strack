<?php

$name=$_POST['servername'];
$id=$_POST['serverid'];
$ram=$_POST['serverram'];
$drives=$_POST['serverdrives'];
$racked=$_POST['serverracked'];
$loc=$_POST['serverloc'];
$u=$_POST['serveru'];
$labeled=$_POST['serverlabeled'];
$cabled=$_POST['servercabled'];
$inv=$_POST['serverinv'];
$built=$_POST['serverbuilt'];
$post=$_POST['serverpost'];
$live=$_POST['serverlive'];
$notes=$_POST['servernotes'];

$uname="root";
$pass="";

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=strack', $uname, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo->prepare('INSERT INTO checklist (checklist_server_name,
    checklist_server_id,checklist_server_ram,checklist_server_drives,
    checklist_server_racked,checklist_server_loc,checklist_server_u,
    checklist_server_labeled,checklist_server_cabled,checklist_server_inv,
    checklist_server_built,checklist_server_post,checklist_server_live,
    checklist_server_notes) VALUES (:name,:id,:ram,:drives,:racked,:loc,:u,
    :labeled,:cabled,:inv,:built,:post,:live,:notes)');
  $stmt->execute(array(
  ':name' => $name,
  ':id' => $id,
  ':ram' => $ram,
  ':drives' => $drives,
  ':racked' =>$racked,
  ':loc' => $loc,
  ':u' => $u,
  ':labeled' => $labeled,
  ':cabled' =>$cabled,
  ':inv' => $inv,
  ':built' => $built,
  ':post' => $post,
  ':live' => $live,
  ':notes' => $notes,
  ));
  # Affected Rows?
  echo $stmt->rowCount(); // 1
  }
  catch(PDOException $e)
  {
  echo 'Error: ' . $e->getMessage();
  }
?>