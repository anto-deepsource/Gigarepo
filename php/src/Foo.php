<?php
$conn = mysqli_connect("localhost", "my_user", "my_password", "world");

$data = $_REQUEST['data'];
$vulnerableSql = "SELECT * FROM TEST WHERE test = '{$data}'";

function query($param) {
	$query = "SELECT * FROM `plans` WHERE `id` = '{$param}'";
  $db = mydb::getMe();
  $rs = $db->queryAssoc($query);
  $rs = $rs[0];

  return $rs;
}

query($vulnerableSql);
