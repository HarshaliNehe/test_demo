<?php

	$conn=mysqli_connect('localhost','root','','assignment');
	if(!$conn){
		echo $conn->error;
	}
	else{
		//echo"connected successfully";
	}
?>