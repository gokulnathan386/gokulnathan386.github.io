<?php
   
   $con = mysqli_connect("localhost","root","","first_db");

   if($con){
          
          echo "connected";
      }

          else{
          	echo "not connect";
          }

   

   ?>