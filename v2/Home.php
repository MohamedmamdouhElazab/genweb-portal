<?php
  require_once("header.php");
  ?>
    <title>
        Genweb| Home
    </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css" />
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
 $quary="SELECT * FROM user INNER JOIN link on user.ID = link.User_Id";
 $result=mysqli_query($connection,$quary);
 Confirm_Quary($result,0);

 ?>
 <?php
// when logging out

 logging_out("Sign_out");
?>
 
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
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">

          <li>
            <a data-toggle="modal" data-target="#myModal" href="contact.html">Create New Website</a>
        </li>
        <li>
            <form action="index.php" method="post"> 
  <input type="submit" class="btn btn-default" name="Sign_out" value="Sign out">
</form>
            
        </li>
    </ul>
</div>
</div>
</header>

<!--Old Projects Start-->

<div class="">
<div class="container">
        <div class="row">
            <div class="col-lg-12 recent">
                <h4 class="recent-work">
                    Recent Projects
                </h4>
                <p style="color:gray">Some of you work we have done earlier</p>


                <div class="row">

 <?php
    $link ="";
    $U=isset($_COOKIE["user_id12"]) ? $_COOKIE["user_id12"]:"";
    if($U=="")
    {
        header("Location: "."index.php"); 
    }
   while($row=mysqli_fetch_assoc($result))
    {   
          if($U===$row["User_Name"])
          {
           $link=$row["Link_Name"];

        ?>
                    <div class="col-lg-3 col-md-3 ">



                        <div class="item view view-tenth">
                            <img class="img-responsive img-rounded" width="200px" height="200px" src=
                             <?php 

         $key="e16850a73629e65f1a9d5911f5755d19";
         $url =$link ;
         $viewport = "1440x900";
         $width = "400";
         $imge = urltopnj($key,$url,$viewport,$width);  
         echo $imge ;
         
?>  >
                            <div class="mask">
                                <a href=<?php echo $link; ?> class="info" data-toggle="tooltip" data-placement="top" title="Preview">
                                    <i class="fa fa-link">
                                    </i>
                                </a>
                            </div>
                        </div>

                    </div>
                 
                  <?php  } } ?>
                </div>

            </div>
        </div>
    </div>

<!--Old Projects end-->
<!--Featured Designs -->
<hr>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 recent">
                <h4 class="recent-work">
                    Featured Projects
                </h4>
                <p style="color:gray">Some of our work we have done earlier</p>


                <div class="row">

<?php
   // select the table from data base
 $quary="SELECT * FROM user INNER JOIN link on user.ID = link.User_Id";
 $result=mysqli_query($connection,$quary);
 Confirm_Quary($result,0);

 ?>
 <?php
    $link ="";
   while($row=mysqli_fetch_assoc($result))
    {  
          if("Admin12345"===$row["User_Name"])
          {
           $link=$row["Link_Name"];

        ?>

                    <div class="col-lg-3 col-md-3 ">



                        <div class="item view view-tenth">
                            <img class="img-responsive img-rounded" width="200px" height="200px" src=
                              <?php 

         $key="e16850a73629e65f1a9d5911f5755d19";
         $url =$link ;
         $viewport = "1440x900";
         $width = "400";
         $imge = urltopnj($key,$url,$viewport,$width);  
        echo $imge ;
 ?> >
                            <div class="mask">
                                <a href="<?php echo $link; ?>" class="info" data-toggle="tooltip" data-placement="top" title="Preview">
                                    <i class="fa fa-link">
                                    </i>
                                </a>
                            </div>
                        </div>

                    </div>
                  <?php  } } ?>

                </div>

            </div>
        </div>
    </div>

<!--Featured Designs end-->
<!--small footer start -->

<!--small footer end-->
<!--Pop-up starts-->

<div class="modal fade row" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Create your new website</h4>
            </div>
            <div class="modal-body ">


                <div class="login-wrap ">
                    <p>Enter Website details</p>
                    <input type="text" class="form-control" placeholder="Website name" autofocus="">
                    <input type="text" class="form-control" placeholder="Dominant color" autofocus="">
                    <br />
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <img src="img/person_1.png" class="img-responsive">
                            <label class="label_radio col-lg-6 col-sm-6" for="radio" >                                 
                                <input name="templates" id="template_01" value="1" type="radio"> Use

                            </label>

                        </div>
                        <div class="col-lg-4 col-md-4">
                            <img src="img/person_1.png" class="img-responsive" />
                            <label class="label_radio col-lg-6 col-sm-6" for="radio">
                                <input name="templates" id="template_02" value="1" type="radio"> Use 
                            </label>


                        </div>
                        <div class="col-lg-4 col-md-4">
                            <img src="img/person_1.png" class="img-responsive" />
                            <label class="label_radio col-lg-6 col-sm-6" for="radio">
                                <input name="templates" id="template_03" value="1" type="radio"> Use 
                            </label>


                        </div>


                    </div>




                </div>

                <h4 class="modal-title" id="myModalLabel2">Describe your business in words</h4>
                 <form action="../try1.php" method="post">
                <textarea name="text" class="form-control" style="resize:none"></textarea><br>
               
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Create">
                 </form>
            </div>
        </div>
    </div>
</div>
<!--Pop-up ends-->
<!-- js placed at the end of the document so the pages load faster -->

<script src="js/jquery-1.8.3.min.js">
</script>
<script src="js/bootstrap.min.js">
</script>
<script type="text/javascript" src="js/hover-dropdown.js">
</script>
<script defer src="js/jquery.flexslider.js">
</script>
<script type="text/javascript" src="assets/bxslider/jquery.bxslider.js">
</script>

<script type="text/javascript" src="js/jquery.parallax-1.1.3.js">
</script>
<script src="js/wow.min.js">
</script>
<script src="assets/owlcarousel/owl.carousel.js">
</script>

<script src="js/jquery.easing.min.js">
</script>
<script src="js/link-hover.js">
</script>
<script src="js/superfish.js">
</script>
<script type="text/javascript" src="js/parallax-slider/jquery.cslider.js">
</script>
<script type="text/javascript">
    $(function () {

        $('#da-slider').cslider({
            autoplay: true,
            bgincrement: 100
        });

    });
</script>

<!--common script for all pages-->
<script src="js/common-scripts.js">
</script>
<script type="text/javascript">
    jQuery(document).ready(function () {


        $('.bxslider1').bxSlider({
            minSlides: 5,
            maxSlides: 6,
            slideWidth: 360,
            slideMargin: 2,
            moveSlides: 1,
            responsive: true,
            nextSelector: '#slider-next',
            prevSelector: '#slider-prev',
            nextText: 'Onward →',
            prevText: '← Go back'
        });

    });


</script>

<script>
    $('a.info').tooltip();

    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

    $(document).ready(function () {

        $("#owl-demo").owlCarousel({

            items: 4

        });

    });

    jQuery(document).ready(function () {
        jQuery('ul.superfish').superfish();
    });

    new WOW().init();


</script>

<?php
  require_once("footer.php");
  ?>
