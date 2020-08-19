<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];

		$to='kumardeepan29@gmail.com'; 
		$message="Name :".$name."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to,$message, $headers)){
			
		}
		else{
			echo "Something went wrong!";
		}
	}
?>

<!-- info@elinussbaum.com -->