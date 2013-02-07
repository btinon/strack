<?php
$ER = error_reporting(0);
$doc = new DOMDocument();
$doc->loadHTMLFile("scraperesults.html");
error_reporting($ER);
$xpath = new DOMXPath($doc);
/*
$hits = $xpath->query("//select[@id='locationId']/option[@selected='selected']/@value");
foreach($hits as $hit) {
    echo $hit->textContent . " ";
}

echo "| END END END END";


$animals = $xpath->query("//a[@target='animal']");
foreach($animals as $animal) {
    echo $animal->textContent . " ";
}
*/

// <option value="563"selected>ENG-Desktop Engineering</option>

/*
//tbody id="notesTbody"
$hits = $xpath->query("//tbody/tr[@class='searchresults grid']/td/text()");
foreach($hits as $hit) {
    echo "0  server notes ----------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

$hits = $xpath->query("//tbody/tr[@class='searchresultsodd grid']/td/text()");
foreach($hits as $hit) {
    echo "0  server notes ----------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";
*/

// datacenter
$hits = $xpath->query("//select[@id='locationId']/option[@selected='selected']/text()");
foreach($hits as $hit) {
    echo "1  datacenter ------------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// service tag
$hits = $xpath->query('//input[@id="servicetag"]/@value');
foreach($hits as $hit) {
    echo "2  service tag -----------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// model
$hits = $xpath->query("//input[@id='modelName']/@value");
foreach($hits as $hit) {
    echo "3  model ----------------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// server owner
$hits = $xpath->query("//select[@id='requestedByTeam']/option[@selected='selected']/text()");
foreach($hits as $hit) {
    echo "4  server owner ---------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// rack
$hits = $xpath->query('//input[@id="currentRack"]/@value');
foreach($hits as $hit) {
    echo "5  rack ------------------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// rack U
$hits = $xpath->query("//input[@id='currentRackU']/@value");
foreach($hits as $hit) {
    echo "6 U ----------------------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// asset tag
$hits = $xpath->query("//input[@id='assettag']/@value");
foreach($hits as $hit) {
    echo "7 asset tag --------------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// ram
$hits = $xpath->query("//select[@id='sv_serverramid']/option[@selected='selected']/text()");
foreach($hits as $hit) {
    echo "8  ram -------------------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// drives
$hits = $xpath->query("//select[@id='sv_serverhddid']/option[@selected='selected']/text()");
foreach($hits as $hit) {
    echo "9  drives ----------------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// server id
$hits = $xpath->query("//input[@id='serverId']/@value");
foreach($hits as $hit) {
    echo "10 server id -------------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// chassis
$hits = $xpath->query("//input[@id='modelName']/@value");
foreach($hits as $hit) {
    echo "11 chassis ---------------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// fqdn
$hits = $xpath->query("//input[@id='fqdn']/@value");
foreach($hits as $hit) {
    echo "12  fqdn -----------------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// server name
$hits = $xpath->query("//input[@id='hostname']/@value");
foreach($hits as $hit) {
    echo "13 server name ------------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// domain
$hits = $xpath->query("//select[@id='domain']/option[@selected='selected']/text()");
foreach($hits as $hit) {
    echo "14  domain ---------------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// network environment
$hits = $xpath->query("//select[@name='FIELD_20']/option[@selected='selected']/@value");
foreach($hits as $hit) {
    echo "15 network env -------------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// primary ip
$hits = $xpath->query("//input[@name='FIELD_50']/@value");
foreach($hits as $hit) {
    echo "16 primary ip -------------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// network mask
$hits = $xpath->query("//input[@name='FIELD_41']/@value");
foreach($hits as $hit) {
    echo "17 netmask ----------------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// vlan
$hits = $xpath->query("//input[@name='FIELD_51']/@value");
foreach($hits as $hit) {
    echo "17 netmask ----------------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// bond0 ip
$hits = $xpath->query("//td[@class='primaryIPcol']/text()");
foreach ($hits as $hit) {
    echo "18 bond0 ip ---------------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// gateway
$hits = $xpath->query("//input[@id='defaultGateway']/@value");
foreach($hits as $hit) {
    echo "19 gateway ---------------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// raid config
$hits = $xpath->query("//select[@name='FIELD_42']/option[@selected='selected']/@value");
foreach($hits as $hit) {
    echo "20 raid config -----------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";

// eth0 switch
$hits = $xpath->query("//tbody/tr[@name='FIELD_42']/option[@selected='selected']/@value");
foreach($hits as $hit) {
    echo "20 raid config -----------------------------------> ";
    echo $hit->textContent . " ";
}
echo "<br />";
 


echo "| END END END END";

/*
<input type="hidden" name="serverId" id="serverId" value="37597">
<input type="hidden" name="serverChassisId" id="serverChassisId" value="22863">
<input type="hidden" name="dateRetired" id="dateRetired" value="">
<input type="hidden" name="checkBoxList" id="checkBoxList" value="FIELD_65">
<input type="hidden" name="currentRack" id="currentRack" value="P3SC05.12">
<input type="hidden" name="currentRackU" id="currentRackU" value="11">
<input type="hidden" name="storedRack" id="storedRack" value="P3SC05.12">
<input type="hidden" name="storedRackU" id="storedRackU" value="11">
<div id="copyNicDataDiv" style="display: none;"></div>
<input type="hidden" name="username" id="username" value="wtinon">
<input type="hidden" name="userid" id="userid" value="1267">
*/

?>