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
echo "<pre>",var_dump($secure);
exit;
if($secure->ip == "110.38.12.70"){
$flag = 1;
}else{
$flag = 0;


}
if($flag != 1){
    header("Location: https://www.revounts.com.au/404");
    exit();
}
//echo getLocationAddress();
// if($ip == "110.38.12.70"){
            
// }



?>