<?php
$conn = mysqli_connect("localhost", "my_user", "my_password", "world");

$data = $_REQUEST['data'];
$vulnerableSql = "SELECT * FROM TEST WHERE test = '{$data}'";

// prepare query
function query($param) {
  $query = "SELECT * FROM `plans` WHERE `id` = '{$param}'";
  return $query;
}

query($vulnerableSql);
