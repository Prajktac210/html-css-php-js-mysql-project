<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Find Your Perfect Partner - love | Terms :: Make My Love</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <!----font-Awesome----->
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <!----font-Awesome----->
    <script>
        $(document).ready(function(){
            $(".dropdown").hover(            
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');        
                },
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');       
                }
            );
        });
    </script>
</head>
<body>
    <!-- ============================  Navigation Start =========================== -->
    <?php include_once("includes/navigation.php");?>
    <!-- ============================  Navigation End ============================ -->

    <!-- Terms Section -->
    <div class="terms-section">
        <div class="container">
            <div class="breadcrumb1">
                <ul>
                    <a href="index.php"><i class="fa fa-home home_1"></i></a>
                    <span class="divider">&nbsp;|&nbsp;</span>
                    <li class="current-page">Terms of Service</li>
                </ul>
            </div>
            <div class="terms">
                <h3>Terms of Service</h3>    
                <p>This is where you can add your terms of service. You can describe the terms and conditions that users must agree to when using your website or service.</p>
                <p>Include information about user responsibilities, prohibited activities, intellectual property rights, disclaimers, liability limitations, and any other relevant terms.</p>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <?php include_once("footer.php");?>

</body>
</html>
