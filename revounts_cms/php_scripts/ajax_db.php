<?php 
function getLocationAddress() {
    $ip = get_client_ip();
    if($ip === "::1") {
        $ip = json_decode(file_get_contents("http://ipinfo.io/182.176.178.43/json?token=fc36b5729b22a3"));
    } else {
        $ip = json_decode(file_get_contents("https://ipinfo.io/{$ip}/json?token=fc36b5729b22a3"));
    }
    return $ip;
}
// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
$secure= getLocationAddress();

if($secure->ip == "110.38.12.70" || $secure->ip ==  "111.88.5.109" || $secure->loc == "24.8608,67.0104"){
$flag = 1;
}else{
$flag = 0;


}
// if($flag != 1){
//     header("Location: https://www.revounts.com.au/404");
//     exit();
// }




include('functions.php');
// Load configuration as an array. Use the actual location of your configuration file
define('constant_url','https://www.cartincoupon.com/');
$config = parse_ini_file('../../config.ini'); 

// Try and connect to the database
$connection = mysqli_connect('localhost',$config['username'],$config['password'],$config['dbname']);

// If connection was not successful, handle the error
if($connection === false) {
    // Handle error - notify administrator, log to a file, show an error screen, etc.
}



	function db_connect() {

    // Define connection as a static variable, to avoid connecting more than once 
    static $connection;

    // Try and connect to the database, if a connection has not been established yet
    if(!isset($connection)) {
         // Load configuration as an array. Use the actual location of your configuration file
        $config = parse_ini_file('../../config.ini'); 
        $connection = mysqli_connect('localhost',$config['username'],$config['password'],$config['dbname']);
    }

    // If connection was not successful, handle the error
    if($connection === false) {
        // Handle error - notify administrator, log to a file, show an error screen, etc.
        return mysqli_connect_error(); 
    }
    return $connection;
}

?>