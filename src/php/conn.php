<?php
  $server = "localhost";
  $db = "sn";
  $usr = "root";
  $pas = "";

  $conn = new mysqli($server, $usr, $pas, $db);

  if ($conn->connect_error) {
    die("Fehler: " . $conn->connect_error);
  }