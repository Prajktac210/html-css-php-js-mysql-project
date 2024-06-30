<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Find Your Perfect Partner - profile | Privacy :: profile</title>
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
    <div class="grid_3">
        <div class="container">
            <div class="breadcrumb1">
                <ul>
                    <a href="index.php"><i class="fa fa-home home_1"></i></a>
                    <span class="divider">&nbsp;|&nbsp;</span>
                    <li class="current-page">Privacy Policy</li>
                </ul>
            </div>
            <div class="terms_1">
                <h3>Our Privacy Policy</h3>    
                <ul class="feature_list">
                    <li><a href="#">1. Strict data protection measures</a></li>
                    <li><a href="#">2. No sharing of personal information without consent</a></li>
                    <li><a href="#">3. Secure handling of sensitive data</a></li>
                    <li><a href="#">4. Opt-out options for data collection</a></li>
                    <li><a href="#">5. Regular security audits</a></li>
                    <li><a href="#">6. Transparent privacy practices</a></li>
                    <li><a href="#">7. Compliance with data protection regulations</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php include_once("footer.php");?>
</body>
</html>
