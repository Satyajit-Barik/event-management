<?php

 $servername="localhost";
 $userid="root";
 $password="";
 $db="xyz";
 $con=mysqli_connect($servername,$userid,$password,$db);

   if ($con) {
    	
    	echo "database connected";
   }
   else{

   	die("do not access the db because".mysqli_connect_error());
   }





?>