<?php
require 'conn.php';

$sql_select = "SELECT email FROM user";

$result = $conn -> query($sql_select);

if ($result -> num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      echo $row['email'];
  }
}