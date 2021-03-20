<?php

      include "db.php";
    
     $un = $_POST['Username1'];
     $email = $_POST['Email_address2'];
     $pwd = $_POST['Password3'];

     $sql = "insert into users(Username,Email_address,Password)
                            values ('$un','$email','$pwd')";


           $result = mysqli_query($con,$sql);
     

     if($result)
     {

     	
     	header("location:facebook.php");
     }  

     else{

     	echo "error";
     }                     

?>