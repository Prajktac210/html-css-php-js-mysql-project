<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php 
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}

?>
<?php
$result=search();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Makemylove
 | Search :: Make My Love
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
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
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
        <li class="current-page">Regular Search</li>
     </ul>
   </div>
   <!--<script type="text/javascript">
    $(function () {
     $('#btnRadio').click(function () {
          var checkedradio = $('[name="gr"]:radio:checked').val();
          $("#sel").php("Selected Value: " + checkedradio);
      });
    });
   </script>-->
<div class="col-md-9 search_left">
  <form action="" method="post">	
   <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="sex">Gender : </label>
	<div class="col-sm-7 form_radios">
		<input type="radio" class="radio_1" name="sex" value="male" <?php echo "checked";?>/> Groom &nbsp;&nbsp;
		<input type="radio" class="radio_1" name="sex" value="female"/> Bride
		
		<!--<hr />
		<p id="sel"></p><br />
		<input id="btnRadio" type="button" value="Get Selected Value" />-->
	</div>
	<div class="clearfix"> </div>
  </div>
  <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="Marital Status">Marital Status : </label>
	<div class="col-sm-7 form_radios">
		<input type="checkbox" class="radio_1" name="maritalstatus" value="Single" <?php echo "checked" ?>/> Single &nbsp;&nbsp;
		<input type="checkbox" class="radio_1" name="maritalstatus" value="divorced" /> Divorced &nbsp;&nbsp;
		<input type="checkbox" class="radio_1" name="maritalstatus" value="widowed" /> Widowed &nbsp;&nbsp;
		<input type="checkbox" class="radio_1" name="maritalstatus" value="seperated"/> Separated &nbsp;&nbsp;
		<input type="checkbox" class="radio_1" name="maritalstatus" value="any" /> Any
	</div>
	<div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="country">Country : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="country">
        <option value="Not Applicable">Country</option>
		                    <option value="India">India</option>
		                    <option value="China">China</option>
		                    <option value="Usa">Usa</option>
		                         </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="District / City">District / City : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="district">
          <option value="">District/City</option>
		                    <option value="satara">satara</option>
		                    <option value="pune">pune</option>
		                    <option value="mumbai">mumbai</option>
		                    <option value="sangali">sangali</option>
	                   
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="State">State : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="state">
        <option value="">State</option>
		                    <option value="Kerala">Kerala</option>
		                    <option value="Taminadu">Tamilnadu</option>
		                    <option value="Karnataka">Karnataka</option>
		                    <option value="maharashtra">maharashtra</option>  
	                  </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="Religion">Religion : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="religion">
        <option value="Not Applicable">Not Applicable</option>
						                    <option value="Hindu">Hindu</option>
						                    <option value="Christian">Christian</option>
						                    <option value="Muslim">Muslim</option>
						                    <option value="Jain">Jain</option>
						                    <option value="Sikh">Sikh</option>
						                     </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="Mother Tongue">Mother Tongue : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="mothertounge">
        <option value="marathi">marathi</option>
	                    <option value="Hindi">Hindi</option> 
	               		<option value="English">English</option> 
	                 </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="Age">Age : </label>
	<div class="col-sm-7 form_radios">
	  <div class="col-sm-5 input-group1">
        <input class="form-control has-dark-background" name="agemin" id="slider-name" placeholder="18" type="text" required=""/>
      </div>
      
      <div class="col-sm-5 input-group1">
        <input class="form-control has-dark-background" name="agemax" id="slider-name" placeholder="40" type="text" required=""/>
      </div>
      <div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
  <input type="submit" name="search" value="Search"/>
  </div>
 </form>
 <div class="paid_people">
   <h1>Profiles</h1>
<?php
//only start display profiles if and only if search is triggered
if(isset($_POST['search'])){

//code to print matching profiles

// couloumn count

$c_count = '1';

while ($row = mysqli_fetch_assoc($result))
  {
    
    $profid=$row['cust_id'];
    
  // printing left side profile
  echo "<div class=\"row_1\">"; //starting row  
  if ($c_count == '1')
    {
    
    echo "<div class=\"col-sm-6 paid_people-left\">"; //left statrted
    echo "<ul class=\"profile_item\">";
    echo "<a href=\"view_profile.php?id=$profid\">";
    echo "<li class=\"profile_item-img\"><img src=\"profile/". $profid."/".$pic ."\"" . "class=\"img-responsive\" alt=\"\"/></li>";
    echo "<li class=\"profile_item-desc\">";
    echo "<h4>" . $row['firstname'] . " " . $row['lastname'] . "</h4>";
    echo "<p>" . $row['age']. "Yes," . $row['religion'] . "</p>";
    echo "<h5>" . "View Full Profile" . "</h5>";
    echo "</li>";
    echo "</a>";
    echo "</ul>";
    echo "</div>"; //left end
    $c_count++;
    }
    else
    {
    echo "<div class=\"col-sm-6\">"; //right statrted
    echo "<ul class=\"profile_item\">";
    echo "<a href=\"view_profile.php?id=$profid\">";
    echo "<li class=\"profile_item-img\"><img src=\"profile/". $profid."/".$pic ."\"" . "class=\"img-responsive\"" ;
    echo "alt=\"\"/></li>";
    echo "<li class=\"profile_item-desc\">";
    echo "<h4>" . $row['firstname'] . " " . $row['lastname'] . "</h4>";
    echo "<p>" . $row['age']. "Yes," . $row['religion'] . "</p>";
    echo "<h5>" . "View Full Profile" . "</h5>";
    echo "</li>";
    echo "</a>";
    echo "</ul>";
    echo "</div class=\"test\">"; //right end

    // end of right side

    
    $c_count = '1';
    }
    echo "</div>"; //row end
  } //loop end
  
}//end of if
?>
   
  </div>
</div>
<!-- Match Right Starts -->
<div class="col-md-3 match_right">
  <?php include_once("matchright.php");?>
</div>
<!-- Match Right ends -->
     <div class="clearfix"> </div>
  </div>
</div>


<?php include_once("footer.php");?>
<!-- FlexSlider -->
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
	$(function(){
	  SyntaxHighlighter.all();
	});
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
  </script>
<!-- FlexSlider -->
</body>
</html>	