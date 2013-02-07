<?php

/*
$dc="TBD";
$st="TBD";
$model="TBD";
$owner="TBD";
 $rack="TBD";
 $racku="TBD";
 $at="TBD";
 $ram="TBD";
 $drives="TBD";
 $serverid="TBD";
 $fqdn="TBD";
 $servername="TBD";
 $domain="TBD";
 $environment="TBD";
 $ip="TBD";
 $mask="TBD";
 $vlan="TBD";
 $gateway="TBD";
 $bond="TBD";
 $raid="TBD";
 */
$ER = error_reporting(0);
$doc = new DOMDocument();
$doc->loadHTMLFile($_POST['sourcefn']);
error_reporting($ER);
$xpath = new DOMXPath($doc);

// datacenter
$hits = $xpath->query("//select[@id='locationId']/option[@selected='selected']/text()");
if ($hits)
{
    foreach($hits as $hit) { $dc = $hit->textContent . " "; }
}
if (!isset($dc) || $dc==" ") { $dc="TBD" ; }

// service tag
$hits = $xpath->query('//input[@id="servicetag"]/@value');
if ($hits)
{
    foreach($hits as $hit) { $st = $hit->textContent . " "; }
}
if (!isset($st) || $st==" ") { $st="TBD" ; }

// model
$hits = $xpath->query("//input[@id='modelName']/@value");
if ($hits)
{
    foreach($hits as $hit) { $model = $hit->textContent . " "; }
}
if (!isset($model) || $model==" ") { $model="TBD" ; }

// server owner
$hits = $xpath->query("//select[@id='requestedByTeam']/option[@selected='selected']/text()");
if ($hits)
{
    foreach($hits as $hit) { $owner = $hit->textContent . " "; }
}
if (!isset($owner) || $owner==" ") { $owner="TBD" ; }

// rack
$hits = $xpath->query('//input[@id="currentRack"]/@value');
if ($hits)
{
    foreach($hits as $hit) { $rack = $hit->textContent . " "; }
}
if (!isset($rack) || $rack==" ") { $rack="TBD" ; }

// rack U
$hits = $xpath->query("//input[@id='currentRackU']/@value");
if ($hits)
{
    foreach($hits as $hit) { $racku = $hit->textContent . " "; }
}
if (!isset($racku) || $racku==" ") { $racku="TBD" ; }

// asset tag
$hits = $xpath->query("//input[@id='assettag']/@value");
if ($hits)
{
    foreach($hits as $hit) { $at = $hit->textContent . " "; }
}
if (!isset($at) || $at==" ") { $at="TBD" ; }

// ram
$hits = $xpath->query("//select[@id='sv_serverramid']/option[@selected='selected']/text()");
if ($hits)
{
    foreach($hits as $hit) { $ram = $hit->textContent . " "; }
}
if (!isset($ram) || $ram==" ") { $ram="TBD" ; }

// drives
$hits = $xpath->query("//select[@id='sv_serverhddid']/option[@selected='selected']/text()");
if ($hits)
{
    foreach($hits as $hit) { $drives = $hit->textContent . " "; }
}
if (!isset($drives) || $drives==" ") { $drives="TBD" ; }

// server id
$hits = $xpath->query("//input[@id='serverId']/@value");
if ($hits)
{
    foreach($hits as $hit) { $serverid = $hit->textContent . " "; }
}
if (isset($serverid) || $serverid==" ") { $serverid="TBD" ; }

// fqdn
$hits = $xpath->query("//input[@id='fqdn']/@value");
if ($hits)
{
    foreach($hits as $hit) { $fqdn = $hit->textContent . " "; }
}
if (!isset($fqdn) || $fqdn==" ") { $fqdn="TBD" ; }

// server name
$hits = $xpath->query("//input[@id='hostname']/@value");
if ($hits)
{
    foreach($hits as $hit) { $servername = $hit->textContent . " "; }
}
if (!isset($servername) || $servername==" ") { $servername="TBD" ; }

// domain
$hits = $xpath->query("//select[@id='domain']/option[@selected='selected']/text()");
if ($hits)
{
    foreach($hits as $hit) { $domain = $hit->textContent . " "; }
}
if (!isset($domain) || $domain==" ") { $domain="TBD" ; }

// network environment
$hits = $xpath->query("//select[@name='FIELD_20']/option[@selected='selected']/@value");
if ($hits)
{
    foreach($hits as $hit) { $environment = $hit->textContent . " "; }
}
if (!isset($environment) || $environment==" ") { $environment="TBD" ; }

// primary ip
$hits = $xpath->query("//input[@name='FIELD_50']/@value");
if ($hits)
{
    foreach($hits as $hit) { $ip = $hit->textContent . " "; }
}
if (!isset($ip) || $ip==" ") { $ip="TBD" ; }

// network mask
$hits = $xpath->query("//input[@name='FIELD_41']/@value");
if ($hits)
{
    foreach($hits as $hit) { $mask = $hit->textContent . " "; }
}
if (!isset($mask) || $mask==" ") { $mask="TBD" ; }

// vlan
$hits = $xpath->query("//input[@name='FIELD_51']/@value");
if ($hits)
{
    foreach($hits as $hit) { $vlan = $hit->textContent . " "; }
}
if (!isset($vlan) || $vlan==" ") { $vlan="TBD" ; }

// bond0 ip
$hits = $xpath->query("//td[@class='primaryIPcol']/text()");
if ($hits)
{
    foreach($hits as $hit) { $bond = $hit->textContent . " "; }
}
if (!isset($bond) || $bond==" ") { $bond="TBD" ; }

// gateway
$hits = $xpath->query("//input[@id='defaultGateway']/@value");
if ($hits)
{
    foreach($hits as $hit) { $gateway = $hit->textContent . " "; }
}
if (!isset($gateway) || $gateway==" ") { $gateway="TBD" ; }

// raid config
$hits = $xpath->query("//select[@name='FIELD_42']/option[@selected='selected']/@value");
if ($hits)
{
    foreach($hits as $hit) { $raid = $hit->textContent . " "; }
}
if (!isset($raid) || $raid==" ") { $raid="TBD" ; }

/*
$display = array($dc,$st,$model,$owner, $rack, $racku,$at, $ram,$drives,$serverid,$fqdn,
    $servername,$domain,$environment,$ip,$mask,$vlan,$gateway,$bond,$raid);
for ($x=0;$x<count($display);$x++)
{
    echo $x . "  " . $display[$x] . "<br />";
}
*/
?>