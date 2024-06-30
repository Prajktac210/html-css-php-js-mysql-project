<?php 
include_once("includes/basic_includes.php");
include_once("functions.php");

// Redirect to login page if user is not logged in
if (!isloggedin()) {
    header("location: login.php");
    exit; // Stop further execution
}

// Initialize variables
$result = null;

// Check if profile ID is provided and perform the search
if (isset($_GET['profid']) && !empty($_GET['profid'])) {
    $profid = $_GET['profid'];
    $result = searchProfileById($profid);
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Makemylove | Search-id :: Make My Love</title>
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
            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});

// Function to view profile by ID
function viewprofile() {
    var profid = $("#profid").val();
    if (profid != "") {
        window.location.href = "view_profile.php?id=" + profid;
    } else {
        alert("Please enter a profile ID.");
    }
}
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
        <li class="current-page">Search By Profile ID</li>
     </ul>
   </div>
   <div class="col-md-9 profile_left">
     <form>  
      <div class="form_but1">
        <label class="col-sm-5 control-lable1" for="Prof id">Profile ID : </label>
        <div class="col-sm-7 form_radios">
          <div class="input-group1">
            <input type="text" value="" id="profid" name="profid" placeholder="Enter Profile ID">
            <input type="button" onclick="viewprofile();" value="Search">
          </div>
        </div>
        <div class="clearfix"> </div>
     </div>
    </form>
    <div class="paid_people">
        <h1>Profiles</h1>
        <div class="row_1">
            <?php
            // Print matching profiles if search is triggered
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Displaying profile
                    echo "<div class=\"col-sm-6 paid_people-left\">";
                    echo "<ul class=\"profile_item\">";
                    echo "<a href=\"view_profile.php?id={$row['id']}\">";
                    echo "<li class=\"profile_item-img\"><img src=\"{$row['photo']}\" class=\"img-responsive\" alt=\"\"/></li>";
                    echo "<li class=\"profile_item-desc\">";
                    echo "<h4>{$row['firstname']} {$row['lastname']}</h4>";
                    echo "<p>{$row['age']} Years, {$row['religion']}</p>";
                    echo "<h5>View Full Profile</h5>";
                    echo "</li>";
                    echo "</a>";
                    echo "</ul>";
                    echo "</div>";
                }
            } else {
                echo "<p>No profiles found.</p>";
            }
            ?>
        </div>
    </div>
    <div class="col-md-3 match_right">
        <?php include_once("matchright.php");?> 
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<?php include_once("footer.php");?>
</body>
</html>
