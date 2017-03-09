<?php

$user = 'root';
$pass = 'root';
$db = 'userstable';
$host = 'localhost';
$link = mysqli_init();
$conn = mysqli_connect('localhost', $user, $pass, $db);
mysqli_select_db($conn, $db);
if(!$conn){
 die('task failed');
}
?>
