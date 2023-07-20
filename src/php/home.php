<?php
require 'conn.php';

$sql_select = "SELECT * FROM nachrichten";

$result = $conn -> query($sql_select);

if ($result -> num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      echo $row['nachricht'];
  }
}
?>
<html>
  <body>
    <form action="neu.php" method="post">
      <input type="text" name="empfang" placeholder="Für">
      <textarea type="text" name="nachricht" placeholder="Nachricht"></textarea>
      <input type="submit" value="Senden">
    </form>
  </body>
</html>