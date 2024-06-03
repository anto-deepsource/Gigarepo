<?php
$url = $_GET['url'];
$newUrl = $url;

if (isset($newUrl)) {
    curl_init($newUrl);
}
