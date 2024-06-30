<?php 
include_once("includes/basic_includes.php");
include_once("functions.php");

if(!isloggedin()){
   header("location:login.php");
   exit; // Stop further execution
}

if(isset($_POST['submit'])){
    // Establish database connection
    $con = mysqli_connect("localhost", "root", "", "matrimony");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // Extract form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert data into database
    $insert_query = "INSERT INTO contact_form_data (name, phone, email, message) 
                     VALUES ('$name', '$phone', '$email', '$message')";
    $insert_result = mysqli_query($con, $insert_query);

    if($insert_result) {
        // Data inserted successfully
        echo "Thank you! Your message has been submitted.";
    } else {
        // Error occurred while inserting data
        echo "Error: " . mysqli_error($con);
    }

    // Close database connection
    mysqli_close($con);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Matrimony | Contact :: Matrimony</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet"> 
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
<?php include_once("includes/navigation.php");?>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Contact</li>
     </ul>
   </div>
   <div class="grid_5">
   <address class="addr row">
        <dl class="grid_4">
            <dt>Address :</dt>
            <dd>
               1. PRAJKTA DILIP CHAVAN,SHEKHAMIREWADI, <br>
                KHANDALA,SATARA.<br>
              
           </dd>
        </dl>
        <dl class="grid_4">
            <dt>Telephones :</dt>
            <dd>
                +91 9175604825 <br>
                +91 9689950513
            </dd>
        </dl>
        <dl class="grid_4">
            <dt>E-mail :</dt>
            <dd><a href="mailto:prajktac210@gmail.com">prajktac210@gmail.com</a></dd>
        
        </dl>
      </address>
    </div>
   </div>
</div>
<div class="about_middle">
  <div class="container">
	 <h2>Contact Form</h2>
	  <form id="contact-form" class="contact-form" action="" method="post">
        <fieldset>
          <input type="text" class="text" placeholder="" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
          <input type="text" class="text" placeholder="" name="phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
          <input type="text" class="text" placeholder="" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
          <textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
          <input name="submit" type="submit" id="submit" value="Submit">
        </fieldset>
      </form>
  </div>
</div>
<?php include_once("footer.php");?>
</body>
</html>
