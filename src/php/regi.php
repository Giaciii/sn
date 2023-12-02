<?php
require 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $vorname = mysqli_real_escape_string($conn, $_POST['fname']);
  $nachname = mysqli_real_escape_string($conn, $_POST['lname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $passwort = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $stmt = $conn->prepare("INSERT INTO user (fname, lname, email, password) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $vorname, $nachname, $email, $passwort);

  if ($stmt->execute()) {
    echo "Hinzugefügt";
    header('Location: home.php');
  } else {
    echo "Fehler beim Hinzufügen des Benutzers.";
    error_log("Fehler beim Hinzufügen des Benutzers: " . $stmt->error);
  }

  $stmt->close();
} else {
  echo "Ungültige Anfrage";
}

$conn->close();
?>