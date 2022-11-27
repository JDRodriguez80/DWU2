<?php


$hostname = 'localhost';
$username = 'root';
$pass = '';
$db = 'escuela';
$conn = @mysqli_connect($hostname, $username, $pass, $db);
if (!$conn) {
    echo "error en la conexión ";
} else {

}