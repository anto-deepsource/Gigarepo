<?php
$url = $_GET['url'];

function foo($param) {
  curl_init($param);
}

foo($url);
curl_init($url);
