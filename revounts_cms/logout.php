<?php 

session_start();

$_SESSION['loginStatus']=0;
session_destroy();
header('location: http://revounts.com.au/revounts_cms');


?>