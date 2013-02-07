<?php

$name=$_POST['servername'];
$id=$_POST['serverid'];
$servicetag=$_POST['servicetag'];
$assettag=$_POST['assettag'];
$model=$_POST['model'];
$rack=$_POST['rack'];
$racku=$_POST['racku'];
$ram=$_POST['ram'];
$drives=$_POST['drives'];
$raid=$_POST['raid'];
$domain=$_POST['domain'];
$fqdn=$_POST['fqdn'];
$environment=$_POST['environment'];
$ip=$_POST['ip'];
$bond0=$_POST['bond0'];
$netmask=$_POST['netmask'];
$gateway=$_POST['gateway'];
$vlan=$_POST['vlan'];
$notes=$_POST['notes'];

$uname="root";
$pass="";

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=strack', $uname, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo->prepare('INSERT INTO server (server_server_name,common_server_id,
    server_service_tag,server_asset_tag,server_model,server_rack,server_rack_u,server_ram,
    server_drives,server_raid,server_domain,server_fqdn,server_primary_ip,server_bond0_ip,
    server_netmask,server_gateway,server_vlan,server_tech_notes) VALUES (:name,:id,:st,:at,:model,:rack,
    :racku,:ram,:drives,:raid,:domain,:fqdn,:ip,:bond0,:mask,:gateway,:vlan,:notes)');

  $stmt->execute(array(
  ':name'    => $name,
  ':id'      => $id,
  ':st'      => $servicetag,
  ':at'      => $assettag,
  ':model'   => $model,
  ':rack'    => $rack,
  ':racku'   => $racku,
  ':ram'     => $ram,
  ':drives'  => $drives,
  ':raid'    => $raid,
  ':domain'  => $domain,
  ':fqdn'    => $fqdn,
  ':ip'      => $ip,
  ':bond0'   => $bond0,
  ':mask'    => $netmask,
  ':gateway' => $gateway,
  ':vlan'    => $vlan,
  ':notes'   => $notes,
  ));
 
  }
  catch(PDOException $e)
  {
  echo 'Error: ' . $e->getMessage();
  }
?>