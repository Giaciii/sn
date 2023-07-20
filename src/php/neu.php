<?php
require 'conn.php';

$von = $_POST['empfang'];
$nachricht = $_POST['nachricht'];

$sql = "INSERT INTO nachrichten (empfang, nachricht) VALUES ('$von', '$nachricht')";

if ($conn->query($sql) === TRUE) {
  echo "Gesendet";
} else {
  echo "Fehler: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 