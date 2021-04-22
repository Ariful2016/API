<?php

$conn=mysqli_connect("localhost","root","","ess_db");

$qry="SELECT * FROM 'info'";

$result=mysqli_query($conn,$qry);

$AllData;

if($result==true){
	while($row=mysqli_fetch_assoc($result)){
		
		$AllData=$row;
		
	}
	
	echo json_decode($AllData);
	
}else{
	echo "No data available";
	
}






?>
