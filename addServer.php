<?php
require 'parse.php';

echo "<html>";
echo "<head>";
echo "  <title>Add Server to Strack</title>";
echo "</head>";
echo "<body>";
echo "  <form action='add.php' method='post'>";
echo "    <table>";
echo "      <tr><td>Server Name: </td><td><input type='text' name='servername' value=$servername></td></tr>";
echo "      <tr><td>Server ID: </td><td><input type='text' name='serverid' value=$serverid></td></tr>";
echo "      <tr><td>Service Tag: </td><td><input type='text' name='servicetag' value=$st></td></tr>";
echo "      <tr><td>Asset Tag: </td><td><input type='text' name='assettag' value=$at></td></tr>";
echo "      <tr><td>Model: </td><td><input type='text' name='model' value=$model></td></tr>";
echo "      <tr><td>Rack: </td><td><input type='text' name='rack' value=$rack></td></tr>";
echo "      <tr><td>Rack U: </td><td><input type='text' name='racku' value=$racku></td></tr>";
echo "      <tr><td>RAM: </td><td><input type='text' name='ram' value=$ram></td></tr>";
echo "      <tr><td>Drives: </td><td><input type='text' name='drives' value=$drives></td></tr>";
echo "      <tr><td>RAID: </td><td><input type='text' name='raid' value=$raid></td></tr>";
echo "      <tr><td>Domain: </td><td><input type='text' name='domain' value=$domain></td></tr>";
echo "      <tr><td>FQDN: </td><td><input type='text' name='fqdn' value=$fqdn></td></tr>";
echo "      <tr><td>Environment: </td><td><input type='text' name='environment' value=$environment></td></tr>";
echo "      <tr><td>IP: </td><td><input type='text' name='ip' value=$ip></td></tr>";
echo "      <tr><td>Bond0 IP: </td><td><input type='text' name='bond0' value=$bond0></td></tr>";
echo "      <tr><td>Netmask: </td><td><input type='text' name='netmask' value=$netmask></td></tr>";
echo "      <tr><td>Gateway: </td><td><input type='text' name='gateway' value=$gateway></td></tr>";
echo "      <tr><td>VLAN: </td><td><input type='text' name='vlan' value=$vlan></td></tr>";
echo "      <tr><td>Tech Notes: </td><td><textarea  name='notes' value=$notes></textarea></td></tr>";
echo "      <tr><td colspan='2'>.</td></tr>";
echo "      <tr><td colspan='2'><input type='submit' value='Submit'></td></tr>";
echo "    </table>";
echo "  </form>";
echo "  </body>";
echo "  </html>";
?>