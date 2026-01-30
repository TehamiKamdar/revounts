<?php

    require_once '../GoogleAuthenticator.php';
    $button = '<input type="button" name="sub" onclick="login()" value="Log In" class="btn btn-primary">';
    if (isset($_POST['code'])) {
        $code = $_POST['code'];
 
        $websiteTitle = 'Revounts';
        $ga = new PHPGangsta_GoogleAuthenticator();
        $secret ='WT7464CP5OHY2VCQ';
       
        $result = $ga->verifyCode($secret, $code);
 
        if ($result == 1) {
            //echo $result;
            echo json_encode(array("a" => "$result", "b" => "$button"));
        } else {
            echo json_encode(array("a" => "Login failed", "b" => ""));
        }
    }
// https://www.revounts.com.au/revounts_cms/php_scripts/auth.php?getauth=1

$getauth = $_GET['getauth']; 
if ($getauth==1) {
    echo 'Manual Add: <strong>WT7464CP5OHY2VCQ</strong><br><br>';
    echo 'Scan: <img src="https://api.qrserver.com/v1/create-qr-code/?data=otpauth%3A%2F%2Ftotp%2FRevounts%3Fsecret%3DWT7464CP5OHY2VCQ&size=200x200&ecc=M"/>';
    
}

?>