<?php
 
    
   while($row=mysqli_fetch_assoc($result))
    {
  // checking if the data in sign in texts equal the data in data base

  // for sign in 
  if(isset($_POST["sign_in"]))
  {  
    if(($sign_in_Passward===$row["Passward"])&&($user_id===$row["User_Name"]))
    {
      // for checkbox only
      if(isset($_POST['remember_me']) && $_POST['remember_me'] == 'Yes') 
                {
                  // create cookies for email and passward
                   $name="user_id";
                $value=$user_id;
                $expire=time()+(60*60*24*7*7); // one week
                setcookie($name,$value,$expire);
    
                $name1="Passward";
                $value1=$sign_in_Passward;
                $expire1=time()+(60*60*24*7*7); // one week
                setcookie($name1,$value1,$expire1);
                }
                 $name="user_id12";
                $value=$user_id;
                $expire=time()+(60*60*24*7*7); // one week
                setcookie($name,$value,$expire);

               // for all sign in
                header("Location: "."Home.php");
                break;
    }

    // forget the passward but remmember the user id
    
    if(($sign_in_Passward!=$row["Passward"])&&($user_id===$row["User_Name"]))
    {
      $sign_in_PasswardErr="did you forget your passward";
    }

  }

// checking if the data in sign up texts equal the data in data base (error user already exist)

  //for sign up error

if(isset($_POST["sign_up"]))
  {
  
    if(($Password===$row["Passward"])||($Email===$row["email"])||($User_Name===$row["User_Name"]))
    {
      $checkboxErr="that user already exist";
       $error=1;
       break;
    }
    
  }

  if(($P===$row["Passward"])&&($U===$row["User_Name"]))
    {
      header("Location: "."Home.php"); 
    }
}
?>
<?php
// for sign up 
if($error==0)
{
     if (isset($_POST["sign_up"]))
   {  
    // check if the check box is selected 
     if(isset($_POST['agree_to_this_condition']) && $_POST['agree_to_this_condition'] == 'Yes')
  {
    if (($Full_Name!=="")&&($Email!=="")&&($Password!=="")&&($User_Name!=="")) 
    {
      // insert data
  $quary1="INSERT INTO user (Name,Passward,email,User_Name,Address,City_Town)
  VALUES ('$Full_Name','$Password','$Email','$User_Name','$Address','$City_Town')";
  $result1=mysqli_query($connection,$quary1);
  Confirm_Quary($result1,1);

                $name="user_id12";
                $value=$user_id;
                $expire=time()+(60*60*24*7*7); // one week
                setcookie($name,$value,$expire);
    }
  }
   }
}
?>
