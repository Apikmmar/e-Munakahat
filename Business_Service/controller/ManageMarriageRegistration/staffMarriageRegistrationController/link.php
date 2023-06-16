<?php

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'e-munakahat');
// Check connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}
