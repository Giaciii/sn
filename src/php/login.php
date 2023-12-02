<?php
session_start();
require 'conn.php';

if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = $_POST['password'];

  $sql = "SELECT email, password FROM user WHERE email=?"; // Prepared statement without password check

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();
  
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
      $_SESSION["uname"] = $_POST['email'];
      header('Location: home.php');
    } else {
      die("Falsches Passwort");
    }
  } else {
    die("Benutzer nicht gefunden");
  }

  $stmt->close();
  $conn->close();
} else {
  echo "Ungültige Anfrage";
}
?>