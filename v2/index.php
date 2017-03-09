<?php
  require_once("header.php");
  ?>
  <title>
    Genweb| Index
  </title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/theme.css" rel="stylesheet">
  <link href="css/bootstrap-reset.css" rel="stylesheet">
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->

  <!--external css-->
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/flexslider.css"/>
  <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.css">
  <link rel="stylesheet" href="assets/owlcarousel/owl.theme.css">

  <link href="css/superfish.css" rel="stylesheet" media="screen">
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->


  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="css/component.css">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="css/parallax-slider/parallax-slider.css" />
  <script type="text/javascript" src="js/parallax-slider/modernizr.custom.28468.js">
  </script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js">
    </script>
    <script src="js/respond.min.js">
    </script>
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
  while($row=mysqli_fetch_assoc($result))
    {
    if(($P===$row["Passward"])&&($U===$row["User_Name"]))
    {
      header("Location: "."Home.php"); 
    }
}
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
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">

        <li>
            <a  href="login.php">Sign in</a>
        </li>
        <li>
            <a  href="registration.php">Sign Up</a>
        </li>
    </ul>
</div>
</div>
</header>
<!--header end-->










<div class="container">
  <div class="featurette">
    <img class="featurette-image img-circle pull-right" src="img/index.jpg" style="width:512px;">
    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Flatness.</span></h2>
    <p class="lead">A big design trend for 2013 is "flat" design. Gone are the days of excessive gradients and shadows. Designers are producing cleaner flat designs, and Bootstrap 3 takes advantage of this minimalist trend.</p>
  </div>

  <hr class="featurette-divider">


  <div class="featurette">
    <img class="featurette-image img-circle pull-left" src="img/index.jpg" style="width:512px;">
    <h2 class="featurette-heading">Smaller Footprint. <span class="text-muted">Lightweight.</span></h2>
    <p class="lead">The new Bootstrap 3 promises to be a smaller build. The separate Bootstrap base and responsive.css files have now been merged into one. There is no more fixed grid, only fluid.</p>
  </div>

  <hr class="featurette-divider">

</div>

<div class="bg-aqua">
<div class="container">
  <div class="row">
    <div class="col-lg-12 ">
      <h3 style="color:white">
        About Us
      </h3>
      <p style="color:white;">
        We are a startup in educational applications that aims to facilitate educational systems and make it more enjoyable, our current situation is demo phase where we are still testing our first product prototype and enhancing it, we are looking forward to spread our vision and values all over educational systems throughout different phases of development for our upcoming products.
      </p>
    </div>
  </div>
</div>

  <hr class="featurette-divider">
  </div>
  <div class="container">
    
    
    <div class="row mt centered">
      <div class="col-lg-3">
        <img class="img-circle" src="img/pic1.jpg" width="140" alt="">
        <h4>Michael Robson</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
        <p><i class="glyphicon glyphicon-send"></i> <i class="glyphicon glyphicon-phone"></i> <i class="glyphicon glyphicon-globe"></i></p>
      </div><!--/col-lg-3 -->

      <div class="col-lg-3">
        <img class="img-circle" src="img/pic2.jpg" width="140" alt="">
        <h4>Pete Ford</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
        <p><i class="glyphicon glyphicon-send"></i> <i class="glyphicon glyphicon-phone"></i> <i class="glyphicon glyphicon-globe"></i></p>
      </div><!--/col-lg-3 -->

      <div class="col-lg-3">
        <img class="img-circle" src="img/pic2.jpg" width="140" alt="">
        <h4>Angelica Finning</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
        <p><i class="glyphicon glyphicon-send"></i> <i class="glyphicon glyphicon-phone"></i> <i class="glyphicon glyphicon-globe"></i></p>
      </div><!--/col-lg-3 -->
         <div class="col-lg-3">
        <img class="img-circle" src="img/pic1.jpg" width="140" alt="">
        <h4>Angelica Finning</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
        <p><i class="glyphicon glyphicon-send"></i> <i class="glyphicon glyphicon-phone"></i> <i class="glyphicon glyphicon-globe"></i></p>
      </div><!--/col-lg-3 -->
    </div><!-- /row -->
  </div><!-- /container -->


  <hr class="featurette-divider">


<!-- END CLIENTS -->
</div>

<section id="faq">

  <div class="container">



    <div class="row">

      <div class="col-md-10 col-md-offset-1 mar-b-30">

        <div id="heading">
          <h2 class="wow flipInX">F.A.Q.</h2>
          <p class="lead wow fadeIn">You have a question? Someone else might have had the exact same one. Let's find out!</p>
        </div>

        <!--////////// Accordion Toggle //////////-->
        <div class="panel-group wow fadeInUp" id="accordion" data-wow-duration="2s">

          <!-- PANEL 1 -->
          <div class="panel panel-default">
            <div class="panel-heading panel-heading-faq">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  Is this template compatible with Bootstrap 3?
                </a>
              </h4>
            </div>

            <div id="collapseOne" class="panel-collapse collapse">
              <div class="panel-body panel-faq">
                <p>Absolutely! As shown with a few examples within this demo, you can use all the bootstrap goodies such as carousels, modal windows, tooltips, tabs, accordions, form elements...</p>
              </div>
            </div>
          </div>

          <!-- PANEL 2 -->
          <div class="panel panel-default">
            <div class="panel-heading panel-heading-faq">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                  Are there more icons available?
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body panel-faq">
                <p>Hell yeah! This template is built on the awesome <a href="http://designmodo.com/flat/" target="_blank">Flat UI kit by Designmodo</a>.<br>All the icons & goodies you can see on the kit presentation can be used in Acme!</p>
              </div>
            </div>
          </div>

          <!-- PANEL 3 -->
          <div class="panel panel-default">
            <div class="panel-heading panel-heading-faq">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                  Is it a flat design concept?
                </a>
              </h4>
            </div>

            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body panel-faq">
                <p>Off course.This theme is built on top of flat design concept.</p>
              </div>
            </div>
          </div>

          <!-- PANEL 4 -->
          <div class="panel panel-default">
            <div class="panel-heading panel-heading-faq">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                  Does the template hack into Bootsrap core files?
                </a>
              </h4>
            </div>

            <div id="collapseFour" class="panel-collapse collapse">
              <div class="panel-body panel-faq">
                <p>Nooooo. Yeww, no way! The Bootsrap files are totally untouched - all the customizations are done on extra css files, so you can upgrade bootstrap versions wihout any modification losses.</p>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading panel-heading-faq">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                  Is this template compatible with Bootstrap 3?
                </a>
              </h4>
            </div>

            <div id="collapseFive" class="panel-collapse collapse">
              <div class="panel-body panel-faq">
                <p>Absolutely! As shown with a few examples within this demo, you can use all the bootstrap goodies such as carousels, modal windows, tooltips, tabs, accordions, form elements...</p>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading panel-heading-faq">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                  Is this template responsive?
                </a>
              </h4>
            </div>

            <div id="collapseSix" class="panel-collapse collapse">
              <div class="panel-body panel-faq">
                <p>Absolutely! As shown with a few examples within this demo, you can see this template is fully responsive.This is built on top of Responsive Twitter Bootstrap 3 framework.Enjoy!!</p>
              </div>
            </div>
          </div>
        </div>


      </div><!-- /col-md-10 -->


    </div>
  </div>

</section>
  <hr class="featurette-divider">


<!-- END CLIENTS -->
</div>

<div id="home-services">

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>
          In case you need any help
        </h2>
      </div>

      <div class="col-md-3">
        <div class="h-service">
          <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
            <i class="fa fa-question">
            </i>
          </div>
          <div class="h-service-content wow fadeInUp">
            <h3>
              PRESALE QUESTION
            </h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim  laborum.
              <br>
              <a href="#">
                Learn more
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="h-service">
          <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
            <i class="fa fa-h-square">
            </i>
          </div>
          <div class="h-service-content wow fadeInUp">
            <h3>
              NEED SUPPORT?
            </h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim  laborum.
              <br>
              <a href="#">
                Learn more
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="h-service">
          <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
            <i class="fa fa-h-square">
            </i>
          </div>
          <div class="h-service-content wow fadeInUp">
            <h3>
              NEED SUPPORT?
            </h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim  laborum.
              <br>
              <a href="#">
                Learn more
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="h-service">
          <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
            <i class="fa fa-users">
            </i>
          </div>
          <div class="h-service-content wow fadeInUp">
            <h3>
              CHECK FORUM
            </h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim  laborum.
              <br>
              <a href="#">
                Learn more
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>


</div>
  <hr class="featurette-divider">






    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-warning">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


</div>
<!-- service end -->


<!-- END CLIENTS -->
</div>
</div>


<!--container end-->

<!--footer start-->
    <section id="footer" class="section footer">
    <div class="container">
      

      <div class="row ">
          <div class="col-sm-12"><p style="color:#29abe2">Footer of genweb</p></div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Amoeba
                    -->
      </div>
    </div>

  </section>
 


    <!-- js placed at the end of the document so the pages load faster
<script src="js/jquery.js">
</script>
-->
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
  $(function() {

    $('#da-slider').cslider({
      autoplay    : true,
      bgincrement : 100
    });

  });
</script>



<!--common script for all pages-->
<script src="js/common-scripts.js">
</script>

<script type="text/javascript">
  jQuery(document).ready(function() {


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

  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide",
      start: function(slider) {
        $('body').removeClass('loading');
      }
    });
  });

  $(document).ready(function() {

    $("#owl-demo").owlCarousel({

      items : 4

    });

  });

  jQuery(document).ready(function(){
    jQuery('ul.superfish').superfish();
  });

  new WOW().init();


</script>
<?php
  require_once("footer.php");
  ?>