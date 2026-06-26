<?php
$servername = "localhost:8080";
$username = "major";
$password = "Muskan@1108";
$db_name = "major";

$conn = mysqli_connect("localhost:8080", "major", "Muskan@1108", "major");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

define('SERVER_PATH', $_SERVER['DOCUMENT_ROOT'] . '/php/muskan/');
define('SITE_PATH', 'http://localhost/php/muskan/');
define('PRODUCT_IMAGE_SERVER_PATH', SERVER_PATH . 'image/product/');
define('PRODUCT_IMAGE_SITE_PATH', SITE_PATH . 'image/product/');
?>
