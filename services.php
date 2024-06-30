<!DOCTYPE HTML>
<html>
<head>
    <title>Find Your Perfect Partner - lagnabandan | Services :: My Love</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Add your CSS links here -->
    <link rel="stylesheet" href="style.css">

    <style>
        /* Add your custom CSS styles here */

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .breadcrumb1 {
            margin-bottom: 20px;
        }

        .breadcrumb1 ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .breadcrumb1 ul li {
            display: inline;
        }

        .breadcrumb1 ul li a {
            text-decoration: none;
            color: #333;
        }

        .breadcrumb1 ul li.current-page {
            font-weight: bold;
        }

        .page_header {
            text-align: center;
            margin-bottom: 30px;
        }

        .service-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .service-item {
            width: calc(33.33% - 20px);
            margin: 10px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .service-item h4 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }

        .service-item p {
            font-size: 14px;
            line-height: 1.6;
            color: #666;
        }
    </style>

</head>
<body>

    <!-- Navigation Section -->
    <?php include_once("includes/navigation.php");?>

    <div class="container">
        <div class="breadcrumb1">
            <ul>
                <li><a href="index.php"><i class="fa fa-home home_1"></i></a></li>
                <li class="divider">&nbsp;|&nbsp;</li>
                <li class="current-page">Services</li>
            </ul>
        </div>

        <!-- Services Section -->
        <div class="page_header">
            <h1>Our Services</h1>
            <h3>Discover what we offer</h3>
            <div class="service-list">
                <div class="service-item">
                    <h4>Advanced Search</h4>
                    <p>Filter your search based on criteria such as age, religion, caste, profession, and more to find profiles that match your preferences.</p>
                </div>
                <div class="service-item">
                    <h4>Personalized Matchmaking</h4>
                    <p>Receive personalized matchmaking assistance from our team of experts who understand your preferences and help you find compatible matches.</p>
                </div>
                <div class="service-item">
                    <h4>Profile Verification</h4>
                    <p>Ensure the authenticity of profiles through our thorough profile verification process, which includes ID verification and background checks.</p>
                </div>
                <div class="service-item">
                    <h4>Privacy & Security</h4>
                    <p>Your privacy and security are our top priorities. We employ advanced security measures to safeguard your information and ensure a safe online experience.</p>
                </div>
                <div class="service-item">
                    <h4>24/7 Customer Support</h4>
                    <p>Get assistance whenever you need it with our dedicated customer support team available 24/7 to address your queries and concerns.</p>
                </div>
                <div class="service-item">
                    <h4>Success Stories</h4>
                    <p>Read success stories from couples who found their life partners through our platform and get inspired in your own search for love.</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer Section -->
    <?php include_once("footer.php");?>

</body>
</html>
