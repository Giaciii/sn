<?php
  $server = "localhost";
  $db = "sn";
  $usr = "root";
  $pas = "";

  // Create connection
  $conn = new mysqli($server, $usr, $pas, $db);

  // Check connection
  if ($conn->connect_error) {
    die("Fehler: " . $conn->connect_error);
  }
  echo "Verbunden";

  $conn->close(); 