<?php

$file = $_GET['file'];
[$foo, $newFile] = ["foo", $file];

if(isset($newFile)) {
	vulnerableFunction("pages/$newFile");
} else {
	include("index.php");
}

// a vulnerable function
function vulnerableFunction($param) {
	include($param);
}
