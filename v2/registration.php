<?php
  require_once("header.php");
  ?>
    <title>Acme | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php
   // select the table from data base
 $quary="SELECT * FROM user";
 $result=mysqli_query($connection,$quary);
 Confirm_Quary($result,0);

 ?>
  <?php 

// if user used remember me option and try to log in again he get directed to his page
 $U=isset($_COOKIE["user_id"]) ? $_COOKIE["user_id"]:"";
 $P=isset($_COOKIE["Passward"]) ? $_COOKIE["Passward"]:"";
 
?>
  <?php
   // initialize flags
  $error=0;
  // error variable is flag for sign up error 
  // when error=1 error happen 
  // when error=0 no error happen save the value in data base 

// initialize variable for error message
  $sign_up_emailErr=$sign_up_Full_NameErr=$sign_up_passwardErr=$checkboxErr="";
$sign_up_Re_type_passwardErr=$sign_up_User_NameErr="";
// check the textbox if there is value in it or not and assign that value into variables

$Full_Name=text_value("Full_Name");
$Address=text_value("Address");
$Email=text_value("Email");
$City_Town=text_value("City_Town");
$User_Name=text_value("User_Name");
$Password=text_value("Password");
$Re_type_Password=text_value("Re_type_Password");

// validation for sign up  
     $sign_up_passwardErr=text_validation("sign_up",$Password,1,"passward");  
     $sign_up_emailErr=text_validation("sign_up",$Email,2,"Email");
     $sign_up_Full_NameErr=text_validation("sign_up",$Full_Name,3,"Full Name");
     $sign_up_User_NameErr=text_validation("sign_up",$User_Name,1,"User Name");
     $checkboxErr=text_validation("sign_up",'agree_to_this_condition',4,"null");
     if($Re_type_Password!==$Password)
     {
        $sign_up_Re_type_passwardErr="passward does not match";
     }
     if($sign_up_passwardErr==="passward must contain upper and lower letter and number and between 8 and 12")
     {
      $Password="";
     }
     if($sign_up_Full_NameErr==="name must contain only upper and lower letter")
     {
        $Full_Name="";
     }
      if($sign_up_User_NameErr==="User Name must contain upper and lower letter and number and between 8 and 12")
     {
        $User_Name="";
     }
     

?>
<?php
  require_once("compare_values_to_database.php");
  ?>
    <!--header start-->
  <!--header start-->
    <header class="head-section">
      <div class="navbar navbar-default navbar-static-top container">
        <div class="navbar-header">
          <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">  <img src="img/webgen-logo.png" style="width:100px ;margin-bottom:10px;"></a>
    </div>

</div>
</header>

    <!--container start-->
        <div class="container">

            <form class="form-signin wow fadeInUp" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <h2 class="form-signin-heading">Register now</h2>
                <div class="login-wrap">
                    <p>Enter personal details</p>
                    <input type="text" class="form-control" placeholder="Full Name" autofocus="" name="Full_Name">
                    <span class="error"> <?php echo $sign_up_Full_NameErr;?></span>
                    <input type="text" class="form-control" placeholder="Address (optianal)" autofocus="" name="Address">
                    <input type="email" class="form-control" placeholder="Email" autofocus="" name="Email">
                    <span class="error"> <?php echo $sign_up_emailErr;?></span>
                </br>
                    <input type="text" class="form-control" placeholder="City_Town (optianal)" autofocus="" name="City_Town">
                    <div class="radios">
                        <label class="label_radio col-lg-6 col-sm-6" for="radio">
                            <input name="male-radio" id="radio-01" value="1" type="radio" checked=""> Male
                        </label>
                        <label class="label_radio col-lg-6 col-sm-6" for="radio">
                            <input name="female-radio" id="radio-02" value="1" type="radio"> Female
                        </label>
                    </div>

                    <p> Enter account details below</p>
                    <input type="text" class="form-control" placeholder="User Name" autofocus="" name="User_Name">
                    <span class="error"> <?php echo $sign_up_User_NameErr;?></span>
                    <input type="password" class="form-control" placeholder="Password" name="Password">
                     <span class="error"> <?php echo $sign_up_passwardErr;?></span>
                    <input type="password" class="form-control" placeholder="Re-type Password" name="Re_type_Password">
                    <span class="error"> <?php echo $sign_up_Re_type_passwardErr;?></span>
                    <label class="checkbox">
                        <input type="checkbox" name="agree_to_this_condition" value="Yes"> I agree to the Terms of Service and Privacy Policy
                    </label><span class="error"> <?php echo $checkboxErr;?></span>
                    <input class="btn btn-lg btn-login btn-block" type="submit" name="sign_up" value="Submit">


                    <div class="registration">
                        Already Registered ?
                        <a class="" href="login.php">
                            Login
                        </a>
                    </div>
                </div>
            </form>

        </div>
    <!--container end-->

    <!--footer start-->

  <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>

    <script src="js/jquery.easing.min.js"></script>
    <script src="js/link-hover.js"></script>


     <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        wow = new WOW(
          {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0          // default
          }
        )
        wow.init();
    </script>

<?php
  require_once("footer.php");
  ?>
