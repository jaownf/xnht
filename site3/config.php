<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'sislogin');

$conn = new mysqli(HOST, USER, PASS, BASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
