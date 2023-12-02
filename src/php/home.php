<?php
session_start();
$uname = $_SESSION['uname'];
require 'conn.php';

$sql_select = "SELECT * FROM nachrichten WHERE empfang='$uname'";

$result = $conn -> query($sql_select);

if ($result -> num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      echo $row['nachricht'] . "\n";
  }
}

?>
<html>
  <head>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <div class="personen">

      <?php
        $sql_select_anfrage = "SELECT * FROM anfrage WHERE email='$uname'";

        $result_anfrage = $conn -> query($sql_select_anfrage);
        
        if ($result_anfrage -> num_rows > 0) {
          while($row = $result_anfrage->fetch_assoc()) {
            echo "Sie haben eine Anfrage von " . $row['anfrager'] . "\n";
          }
        }
      ?>

      <form action="anfrage.php" method="post">
        <input type="text" name="anfrage_email" placeholder="E-Mail">
        <input type="submit" value="Anfragen">
      </form>

      <h1>Personen</h1>
      <?php
        $sql_select_person = "SELECT * FROM personen WHERE person1='$uname'";

        $result_person = $conn -> query($sql_select_person);
        
        if ($result_person -> num_rows > 0) {
          while($row = $result_person->fetch_assoc()) {
            echo $row['person2'] . "</br>";
          }
        }
      ?>

    </div>  
      </form>
      <form action="neu.php" method="post">
        <input type="text" name="empfang" placeholder="An">
        <textarea type="text" name="nachricht" placeholder="Nachricht"></textarea>
        <input type="submit" value="Senden">
      </form>
  </body>
</html>