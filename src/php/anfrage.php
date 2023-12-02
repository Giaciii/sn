<?php
session_start();
require 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['anfrage_email']) && filter_var($_POST['anfrage_email'], FILTER_VALIDATE_EMAIL)) {
    $anfrage = $_POST['anfrage_email'];

    $stmt = $conn->prepare("INSERT INTO anfrage (email, anfrager) VALUES (?, ?)");
    $stmt->bind_param("ss", $anfrage, $_SESSION['uname']);

    if ($stmt->execute()) {
      echo "Angefragt";
    } else {
      echo "Fehler beim Anfragen.";
      error_log("Fehler beim Anfragen: " . $stmt->error); 
    }

    $stmt->close();
  } else {
    echo "Ungültige Eingabe für die E-Mail-Adresse.";
  }
} else {
  echo "Ungültige Anfrage";
}

$conn->close();
?>