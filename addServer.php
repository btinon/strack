<?php

?>

<html>
<head>
  <title>Add Server to Strack</title>
  <style>
  </style>
</head>
<body>
  <form action="add.php" method="post">
    <table>
      <tr><td>Server Name: </td><td><input type="text" name="servername"></td></tr>
      <tr><td>Server ID: </td><td><input type="text" name="serverid"></td></tr>
      <tr><td>RAM: </td><td><input type="text" name="serverram"></td></tr>
      <tr><td>Drives: </td><td><input type="text" name="serverdrives"></td></tr>
      <tr><td>Location: </td><td><input type="text" name="serverloc"></td></tr>
      <tr><td>U: </td><td><input type="text" name="serveru"></td></tr>
      
      <tr><td colspan="2"><input type="submit" value="Submit"></td></tr>
    </table>
  </form>
  </body>
  </html>