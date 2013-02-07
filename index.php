<?php

?>

<html>
<head>
  <title>Strack menu</title>
</head>
<body>
  <form method="post" action="list.php">
    <input type="submit" name="list" value="List Servers">
  </form>
  <br />
  <br />
  <form method="post" action="addserver.php">
    Bring up server record in the SMDB, right click and [view source],<br />
    then save the source file and enter the filename below:<br />
    <input type="text" name="sourcefn"><br />
    <input type="submit" name="add" value="Add Server">
  </form>
  <br />
  <br />
  <form method="post" action="update.php">
    <input type="submit" name="update" value="Update Server">
  </form>
</body>
</html>
