<?php
$_GET = array_map('htmlspecialchars', $_GET);
$_POST = array_map('htmlspecialchars', $_POST);
$_COOKIE = array_map('htmlspecialchars', $_COOKIE);
$_REQUEST = array_map('htmlspecialchars', $_REQUEST);
?>
