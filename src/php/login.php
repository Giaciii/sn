<?php
require 'conn.php';

if (!isset($_POST['submit'])) {
  die("Error");
}

$email = $_POST['email'];
$pas = $_POST['password'];

$sql = "SELECT email, password FROM user WHERE email='".$email."' and password='".$pas."'";

$result = $conn -> query($sql);

$row = $result -> fetch_object();

if ($result = $row > 0){
  header('Location: home.php');
} else {
  die("Falscher Benutzername oder Passwort");
}


$conn -> close();