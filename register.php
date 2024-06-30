<?php 
require_once("includes/basic_includes.php");
require_once("functions.php");

// Check if the registration form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Call the register function
    register();
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Find Your Perfect Partner - Matrimony | Register :: Matrimony</title>
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
                    <li><a href="index.php"><i class="fa fa-home home_1"></i></a></li>
                    <li><span class="divider">&nbsp;|&nbsp;</span></li>
                    <li class="current-page">Register</li>
                </ul>
            </div>
            <div class="services">
                <div class="col-sm-6 login_left">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="form-group">
                            <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-name" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>" size="60" maxlength="60" class="form-text required">
                        </div>
                        <div class="form-group">
                            <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
                            <input type="password" id="edit-pass" name="pass" size="60" maxlength="128" class="form-text required">
                        </div>
                        <div class="form-group">
                            <label for="edit-email">Email <span class="form-required" title="This field is required.">*</span></label>
                            <input type="email" id="edit-email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>" size="60" maxlength="60" class="form-text required">
                        </div>
                        <div class="form-group form-inline">
                            <label for="edit-age">Age <span class="form-required" title="This field is required.">*</span></label>
                            <select name="day" class="form-control">
                                <option value="">Day</option>
                                <?php
                                for ($i = 1; $i <= 31; $i++) {
                                    echo "<option value='$i'>$i</option>";
                                }
                                ?>
                            </select>
                            <select name="month" class="form-control">
                                <option value="">Month</option>
                                <?php
                                $months = array(
                                    "01" => "January",
                                    "02" => "February",
                                    "03" => "March",
                                    "04" => "April",
                                    "05" => "May",
                                    "06" => "June",
                                    "07" => "July",
                                    "08" => "August",
                                    "09" => "September",
                                    "10" => "October",
                                    "11" => "November",
                                    "12" => "December"
                                );
                                foreach ($months as $key => $value) {
                                    echo "<option value='$key'>$value</option>";
                                }
                                ?>
                            </select>
                            <select name="year" class="form-control">
                                <option value="">Year</option>
                                <?php
                                $currentYear = date("Y");
                                for ($i = $currentYear; $i >= $currentYear - 100; $i--) {
                                    echo "<option value='$i'>$i</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group form-group1">
                            <label class="col-sm-7 control-lable" for="sex">Sex : </label>
                            <div class="col-sm-5">
                                <div class="radios">
                                    <label for="radio-01" class="label_radio">
                                        <input type="radio" name="gender" value="male" checked> Male
                                    </label>
                                    <label for="radio-02" class="label_radio">
                                        <input type="radio" name="gender" value="female"> Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
                        </div>
                    </form>
                </div>
                <!-- Add sharing icons and other content here -->
            </div>
        </div>
    </div>
    <?php include_once("footer.php");?>
</body>
</html>
