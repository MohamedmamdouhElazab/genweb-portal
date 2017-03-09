<?php 
function Confirm_Quary($result,$flage)
{
	if(!$result)
    {
    	// validation for value in data base (is this table exsist)
    	// error adding value to data base
      die("database fail");
    }
    else
    {
    	// success adding value to data base
    	if($flage==1)
    	{
    		 header("Location: "."Home.php");
    	}
    }
}
?>
<?php 
function text_value($name)
{
  if(isset($_POST[$name]))
{
  return $_POST[$name];
}
else {
  return "";
     }
}
?>
<?php 
function text_validation($name,$value,$number,$message)
{
  if(isset($_POST[$name]))
{
	// passward error
  if($number==1)
  {
    if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $value))    
    {
    if(empty($value))
    {
       return  $message . " is required";
    }
    else
    {
 return $message . " must contain upper and lower letter and number and between 8 and 12";
  
    }
    }  
  }
  else if($number==2)
  {
    // email error
     if(empty($value))
     {
        return $message . " is required";
     }
  }
  else if($number==3)
  {
     // name error
     if((!preg_match('/([a-z]{1,})/', $value))||(!preg_match('/([A-Z]{1,})/', $value)) ||(preg_match('/([\d]{1,})/',$value)))  
    {
    // name error (empty)
     if(empty($value))
     {
         return $message . " is required";
     }
    else
    {
      // name error (contain number)
   return $message . " must contain only upper and lower letter";
    }
    }
  }
  else if($number==4)
  {
  	 if(!(isset($_POST[$value]) && $_POST[$value] == 'Yes'))
     {
      return "you must accept the copy rights";
     }
  }
}

}
?>
<?php 
function logging_out($name)
{
  if(isset($_POST[$name]))
{

   // delete cookies
  $expire=time()-(60*60*24*7*7);
  setcookie("user_id",'',$expire);
  
  setcookie("Passward",'',$expire);
  
   setcookie("user_id12",'',$expire);
}
}
?>
<?php 
function urltopnj($key,$url,$viewport,$width)
{


         $secret=md5("$url"."mohamed");

    $image_url="http://api.screenshotlayer.com/api/capture?access_key=$key&url=$url&viewport=$viewport&width=$width&secret_key=$secret";
   

    return $image_url;
}
?>