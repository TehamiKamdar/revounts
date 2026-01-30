<?php
session_start();
$server = 'localhost';
$user = 'saving_admin';
$pass = '123Karachi321';
$connect = mysql_connect($server,$user,$pass)
or die(mysql_error());

$selectdb = mysql_select_db('firstsaving')
or die(mysql_error());

?>
