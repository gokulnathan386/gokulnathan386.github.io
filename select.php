<?php


   include  "db.php";


     $email=$_POST['Email_address2'];

     $pwd=$_POST['Password3'];
 
    $sql = "select * from users where Email_address ='$email' and Password ='$pwd'";

     $result=mysqli_query($con,$sql);
     
     $count=mysqli_num_rows($result);
    
      if($count>0){
          
          header("location: home.php");
      }
else{
        header("location: facebook.php");
}


?>