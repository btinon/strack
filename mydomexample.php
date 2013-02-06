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

$hits = $xpath->query("//select[@id='locationId']/option[@selected='selected']/text()");
foreach($hits as $hit) {
    echo $hit->textContent . " ";
}

echo "<br />";

$hits = $xpath->query('//input[@id="servicetag"]/@value');
foreach($hits as $hit) {
    echo $hit->textContent . " ";
}

echo "<br />";
$hits = $xpath->query("//input[@id='modelName']/@value");
foreach($hits as $hit) {
    echo $hit->textContent . " ";
}

echo "<br />";
$hits = $xpath->query("//select[@id='requestedByTeam']/option[@selected='selected']/text()");
foreach($hits as $hit) {
    echo $hit->textContent . " ";
}
echo "<br />";

$hits = $xpath->query('//input[@id="currentRack"]/@value');
foreach($hits as $hit) {
    echo $hit->textContent . " ";
}

echo "<br />";
$hits = $xpath->query("//input[@id='currentRackU']/@value");
foreach($hits as $hit) {
    echo $hit->textContent . " ";
}

echo "<br />";
$hits = $xpath->query("//input[@id='assettag']/@value");
foreach($hits as $hit) {
    echo $hit->textContent . " ";
}
echo "<br />";
$hits = $xpath->query("//select[@id='sv_serverramid']/option[@selected='selected']/text()");
foreach($hits as $hit) {
    echo $hit->textContent . " ";
}

echo "<br />";

$hits = $xpath->query("//select[@id='sv_serverhddid']/option[@selected='selected']/text()");
foreach($hits as $hit) {
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