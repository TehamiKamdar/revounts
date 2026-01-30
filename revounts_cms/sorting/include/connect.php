<?php
session_start();
$server = 'localhost';
$user = 'root';
$pass = '';
$connect = mysqli_connect($server,$user,$pass,'revounts_db')
or die(mysqli_error());
 
?>
