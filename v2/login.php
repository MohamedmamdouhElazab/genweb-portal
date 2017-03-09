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
  $user_id_error=$sign_in_PasswardErr="";


// check the textbox if there is value in it or not and assign that value into variables
$user_id=text_value("user_id");
$sign_in_Passward=text_value("sign_in_Passward");
$forgot_email=text_value("forgot_email");
  
// validation for sign in 
     $sign_in_PasswardErr=text_validation("sign_in",$sign_in_Passward,1,"passward");
          $forgot_emailErr=text_validation("forgot",$forgot_email,2,"email");
     $user_id_error=text_validation("sign_in",$user_id,1,"user_id");   
      if($sign_in_PasswardErr==="passward must contain upper and lower letter and number")
     {
        $sign_in_Passward="";
     }
     if($user_id_error==="User Name must contain upper and lower letter and number and between 8 and 12")
     {
        $user_id="";
     }
     


?>

<?php
require_once("compare_values_to_database.php");
  ?>
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
    <!--header end-->

    <!--container start-->
    
        <div class="container">
            <div class="form-wrapper">
            <form class="form-signin wow fadeInUp" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <h2 class="form-signin-heading">sign in now</h2>
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="User ID"  name="user_id">
                 <span class="error"> <?php echo $user_id_error;?></span>
                <input type="password" class="form-control" placeholder="Password" name="sign_in_Passward">
                 <span class="error"> <?php echo $sign_in_PasswardErr;?></span>
                <label class="checkbox">
                    <input type="checkbox" name="remember_me" value="Yes"> Remember me
                    <span class="pull-right">
                        <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                    </span>
                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit" name="sign_in">Sign in</button>
                <p>or you can sign in via social network</p>
                <div class="login-social-link">
                    <a href="index.php" class="facebook">
                        <i class="fa fa-facebook"></i>
                        Facebook
                    </a>
                    <a href="index.php" class="twitter">
                        <i class="fa fa-twitter"></i>
                        Twitter
                    </a>
                </div>
                <div class="registration">
                    Don't have an account yet?
                    <a class="" href="registration.php">
                        Create an account
                    </a>
                </div>

            </div>

              <!-- Modal -->
              <div aria-hidden="true" aria-labelledby="myModal" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Forgot Password ?</h4>
                          </div>
                          <div class="modal-body">
                              <p>Enter your e-mail address below to reset your password.</p>
                              <input type="email" name="forgot_email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
                              <span class="error"> <?php echo $forgot_emailErr;?></span>

                          </div>
                          <div class="modal-footer">
                              <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                              <button class="btn btn-success" type="submit" name="forgot" >Submit</button>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- modal -->

          </form>
          </div>
        </div>
    </div>
    <!--container end-->

    <!-- footer end -->
    <!--small footer start -->
  

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
    <script src="js/common-scripts.js"></script>



    <script src="js/jquery.magnific-popup.js"></script>

    <script type="text/javascript">
    $('.image-caption a').tooltip();

    $(function () {

        var filterList = {

            init: function () {

                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist-three').mixitup({
                    targetSelector: '.portfolio',
                    filterSelector: '.filter',
                    effects: ['fade'],
                    easing: 'snap',
                    // call the hover effect
                    onMixEnd: filterList.hoverEffect()
                });

            },

            hoverEffect: function () {
                $("[rel='tooltip']").tooltip();
                // Simple parallax effect
                $('#portfoliolist-three .portfolio .portfolio-hover').hover(
                function(){
                    $(this).find('.image-caption').slideDown(250); //.fadeIn(250)
                },
                function(){
                    $(this).find('.image-caption').slideUp(250); //.fadeOut(205)
                }
            );
            }

        };

        // Run the show!
        filterList.init();


    });

    $( document ).ready(function() {
       $('.magnefig').each(function(){
            $(this).magnificPopup({
                    type:'image',
                    removalDelay: 300,
                    mainClass: 'mfp-fade'
               })
        });
    });
    </script>

  <script>



      $(document).ready(function() {

        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3],
            stopOnHover : true,

        });

      });

      new WOW().init();


  </script>

 <?php
  require_once("footer.php");
  ?>
