<?php
$db = mysqli_connect($hosname = "localhost", $username = "root", $password = "", $database = "proyectophp");

if (!$db) {
  echo "Hubo un error";
  exit;
}
