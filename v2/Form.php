 <div class="container">
    <div class="row">
<div  class="col-lg-6">
  <center> <label>Please Enter Your Information:</label></center>
<form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
   <div class="form-group">
  <label>Full name:</label>
  <input id="fn" class="form-control" type="text" name="fullname" >
  <span class="error"> <?php echo $sign_up_nameErr;?></span>
</div>
   
   <div class="form-group">
  <label>Email:</label><br>
  <input class="form-control" type="email" name="sign_up_email">
  <span class="error"> <?php echo $sign_up_emailErr;?></span>
</div>
   <div class="form-group">
  <label>Passward:</label><br>
  <input class="form-control" type="password" name="sign_up_passward">
  <span class="error"> <?php echo $sign_up_passwardErr;?></span>
</div>
<div class="form-group">
   <input type="checkbox" name="copyrights" value="Yes" > user rigt
</div> <span class="error"> <?php echo $checkboxErr;?></span>
  <center><input id="in" type="submit" class="btn btn-default" name="sign_up" value="sign up"></center>
</form></div>
<div  class="col-lg-6">
  <center> <label>Please Enter your login information:</label></center>
<form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <div class="form-group">
  <label >Email:</label><br>
  <input class="form-control" type="email" name="sign_in_Email">
  <span class="error"> <?php echo $sign_in_EmailErr;?></span>
</div>
  <div class="form-group">
    <label>Passward:</label><br>
  <input class="form-control" type="password" name="sign_in_Passward">
  <span class="error"> <?php echo $sign_in_PasswardErr;?></span>
</div> 
   <input type="checkbox" name="remember_me" value="Yes" >Remember me
  <center><input  type="submit" class="btn btn-default" name="log" value="log in"></center>
</form></div>
 <div id="hidden">
  <a href="this">forget your passward</a>
  </div>
</div>
</div>