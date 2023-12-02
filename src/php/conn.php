<?php
  $server = "127.0.0.1";
  $db = "sn";
  $usr = "root";
  $pas = "";

  $conn = new mysqli($server, $usr, $pas, $db);

  if ($conn->connect_error) {
    die("Fehler: " . $conn->connect_error);
  }