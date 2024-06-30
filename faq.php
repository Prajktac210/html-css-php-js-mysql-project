<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - lagnabandan | Faq :: lagnabandan
</title>
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
        <li class="current-page">FAQ</li>
     </ul>
   </div>
<div class="faq-content">
    <h2>Frequently Asked Questions (FAQ)</h2>
    <div class="faq-item">
        <h3>Question 1: What is lagnabandan?</h3>
        <p>Answer: Lagnabandan is a platform to help you find your perfect partner. We provide various features and tools to assist you in your search for a life partner.</p>
    </div>
    <div class="faq-item">
        <h3>Question 2: How can I create a profile on lagnabandan?</h3>
        <p>Answer: To create a profile on lagnabandan, you need to sign up for an account. Once you have an account, you can fill out your profile details and upload photos to complete your profile.</p>
    </div>
    <div class="faq-item">
        <h3>Question 3: Is it free to use lagnabandan?</h3>
        <p>Answer: Yes, basic usage of lagnabandan is free. However, certain premium features may require a subscription or payment.</p>
    </div>
    <div class="faq-item">
        <h3>Question 4: How can I search for potential matches on lagnabandan?</h3>
        <p>Answer: You can search for potential matches on lagnabandan using our search feature. You can specify criteria such as age, location, and preferences to find compatible matches.</p>
    </div>
    <!-- Add more FAQ items as needed -->
</div>

  

<?php include_once("footer.php");?>

