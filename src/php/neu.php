<?php
session_start();
require 'conn.php';
$uname = $_SESSION['uname'];

$von = $_POST['empfang'];
$nachricht = $_POST['nachricht'];
$zeit = $_POST['zeit'];

$sql = "INSERT INTO nachrichten (empfang, von, nachricht, zeit) VALUES ('$von', '$uname', '$nachricht', '$zeit')";

if ($conn->query($sql) === TRUE) {
  echo "Gesendet";
  header('Location: home.php');
} else {
  echo "Fehler: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 