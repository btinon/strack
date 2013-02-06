<?php
$doc = new DOMDocument();
$doc->loadHTML('<a href="somepath" target="fruit">apple</a><a href="somepath" target="animal">cat</a><a href="somepath" target="fruit">orange</a><a href="somepath" target="animal">dog</a><a href="somepath" target="fruit">mango</a><a href="somepath" target="animal">monkey</a>');

$xpath = new DOMXPath($doc);

$fruits = $xpath->query("//a[@target='fruit']");
foreach($fruits as $fruit) {
    echo $fruit->textContent . " ";
}

echo "| ";

$animals = $xpath->query("//a[@target='animal']");
foreach($animals as $animal) {
    echo $animal->textContent . " ";
}
?>