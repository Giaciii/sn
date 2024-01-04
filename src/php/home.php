<?php
session_start();
$uname = $_SESSION['uname'];
require 'conn.php';

$sql_select = "SELECT * FROM nachrichten WHERE empfang='$uname' OR von='$uname' ORDER BY zeit";

$result = $conn -> query($sql_select);

echo "<div id='nachrichten'>";
if ($result -> num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      echo "<div class='nachricht andere'>";
      echo $row['nachricht'] . "\n";
      echo "</div>";
      echo "<span class='zeit'>Gesendet um: " . $row['zeit'] . "</span>";
  }
}
echo "</div>";

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
            $anfrager = $row['anfrager'];
            $id = $row['id'];
            ?>
            <form action="annehmen.php" method="post">
              <input type="hidden" name="anfrager" value='<?php echo $anfrager ?>'>
              <input type="hidden" name="id" value='<?php echo $id ?>'>
              <input type="submit" name="annehmen" value="Annehmen">
            </form>
            <?php
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
      <div id="schreiben">
        <form action="neu.php" method="post">
          <input type="text" name="empfang" placeholder="An">
          <input type="hidden" name="zeit" value='<?php echo date("H:i"); ?>'>
          <textarea type="text" name="nachricht" placeholder="Nachricht"></textarea>
          <input type="submit" value="Senden">
        </form>
      </div>
  </body>
</html>