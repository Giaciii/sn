<?php
require 'conn.php';

$vorname = $_POST['fname'];
$nachname = $_POST['lname'];
$email = $_POST['email'];
$passwort = $_POST['password'];

$sql = "INSERT INTO user (fname, lname, email, password) VALUES ('$vorname', '$nachname', '$email', '$passwort')";

if ($conn->query($sql) === TRUE) {
  echo "Hinzugefügt";
} else {
  echo "Fehler: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 