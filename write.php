<?php

    $conn=mysqli_connect("localhost","root","","api");

     if($conn){
	  echo "connected";
      }else{
	  echo "error";
      }


    if(isset($_POST["name"])|| isset($_POST["email"]))
     {
	  $name=$_POST["name"];
      $email=$_POST["email"];

      $qry="INSERT INTO 'info' ('name', 'email') VALUES ('$name', '$email')";

      $result=mysqli_query($conn,$qry);

      if($result==true){
	  echo"Data inserted";
      }else{
	   echo"Data not inserted";
      }
	  
	 } 
	 
	/* $name=$_POST["name"];
      $email=$_POST["email"];

      $qry="INSERT INTO 'info' ('name', 'email') VALUES ('$name', '$email')";

      $result=mysqli_query($conn,$qry);

      if($result==true){
	  echo"Data inserted";
      }else{
	   echo"Data not inserted";
      }*/

   



?>
