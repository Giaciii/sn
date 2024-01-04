<?php
session_start();
require 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['annehmen']) && isset($_POST['anfrager'])) {
    $anfrager = $_POST['anfrager'];
    $id = $_POST['id'];
    $stmt = $conn->prepare("INSERT INTO personen (person1, person2) VALUES (?, ?)");
    $stmt->bind_param("ss", $_SESSION['uname'], $anfrager);

    $stmt_del = "DELETE FROM anfrage WHERE id=$id";

    if ($stmt->execute() && $conn->query($stmt_del) === TRUE) {
      echo "Angenommen";
    } else {
      echo "Fehler beim Annehmen.";
      error_log("Fehler beim Annehmen: " . $stmt->error); 
    }

    $stmt->close();
  
  }
}