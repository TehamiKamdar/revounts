<?php 
include('php_scripts/dbconfig.php');
include('php_scripts/functions.php');

if(isset($_POST['sub']))
{
    require_once 'GoogleAuthenticator.php';
 
    // if (isset($_POST['code'])) {
    //     $code = $_POST['code'];
 
        $websiteTitle = 'Revounts';
        // $ga = new PHPGangsta_GoogleAuthenticator();
        // $secret ='WT7464CP5OHY2VCQ';
       
        // $result = $ga->verifyCode($secret, $code);
 
        // if ($result == 1) {
            login($_POST['user'],$_POST['pass']);
        // } else {
        //     header('location: index.php?msg=1');
        //     exit;
        // }
    // }
    

}


?>


<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="PromotionCodes">
        <meta name="author" content="PromotionCodesFor">

        <link rel="shortcut icon" href="/images/favicon/favicon.png">

        <title>Welcome To Revounts Reserved CMS. Built 1.0</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>
        
    </head>
    <style>
    .msg-1{
        color: red;
        text-align: center;
    }
    </style>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
        	<div class=" card-box">
            <div class="panel-heading"> 
                <h3 class="text-center"> Sign In to <strong class="text-custom">Revounts</strong> </h3>
            </div> 


            <div class="panel-body">
            <?php if(isset($_GET['msg'])):?>
            <h4 class='msg-1'>Authentication failed</h4>
            <?php endif;?>
            <?php if(isset($_GET['error'])):?>
            <h4 class='msg-1'>Invalid User Name of Password</h4>
            <?php endif;?>
            <form class="form-horizontal m-t-20" method="post" >
                
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="user" placeholder="Username">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" name="pass" placeholder="Password">
                    </div>
                </div>
                <!--<div class="form-group">-->
                <!--    <div class="col-xs-12">-->
                <!--    <input class="form-control" id="googlecode" type="number" onkeypress="return isNumberKey(event)"  name="code" placeholder="Enter auth code..." autocomplete="off">-->
                <!--    </div>-->
                <!--</div>-->


                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <input type="submit" name="sub" value="Log In" class="btn btn-primary">
                    </div>
                </div>

                
            
			</form> 
            
            </div> 
			
            </div>                              
     
            
        </div>
        
        
     
        
    	<script>
            var resizefunc = [];
            
            function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
            //alert("only number allow");
            return false;
            } else {
            return true;
            }      
            }
        </script>
<script type='text/javascript'>
(function () { 
var scriptProto = 'https:' == document.location.protocol ? 'https://' : 'http://'; 
var script = document.createElement('script');
script.type = 'text/javascript';
script.async = true;
script.src = scriptProto+'js.trckprf.com/v1/js?api_key=118438903ba61db55a2a2c4e566b6eab&site_id=60574112928b42f2b3c7be958f4676e0';
(document.getElementsByTagName('head')[0] || document.body).appendChild(script); 
})();
</script>
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>


        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
       
	</body>
</html>