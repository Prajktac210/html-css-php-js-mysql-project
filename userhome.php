<?php 
session_start(); // Start the session

// Function to check if the user is logged in
function isloggedin() {
    return isset($_SESSION['id']); // Assuming 'id' is set in the session upon login
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Find Your Perfect Partner - lagnabandan | User Home :: lagnabandan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Add your CSS links here -->
    <link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <!--font-Awesome-->
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <!--font-Awesome-->

    <!-- Add your custom styles here -->
    <style>
        /* Add your custom CSS styles here */
        .image-container {
            text-align: center;
            margin-top: 20px;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
        }
    </style>
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
                    <li class="current-page">User Home</li>
                </ul>
            </div>

            <div class="navigation" style="background-color: #ccc;">
                <!-- Innernavigation starts -->
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav nav_1">
                   

                   
                        <li><a href="view_profile.php">View Profile</a></li>
                        <li><a href="partner_preference.php">Partner Preference</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                
                                <li><a href="view_profile.php">View Profile</a></li>
                                <li><a href="create_profile.php">Edit Profile</a></li>  
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="search.php">Regular Search</a></li>
                                <li><a href="faq.php">Faq</a></li>
                            </ul>
                        </li>
                    </ul>
                
            </div>

            <!-- Image Container with Wedding Image -->
        
        </div>
    </div>

    <!-- Footer Section -->
    <?php include_once("footer.php")?>

    <!-- FlexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>   
</body>
</html>
