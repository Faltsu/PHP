<?php 
		// get the values entered in the form
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$pnumber = $_POST['phonenumber'];
		
		echo ("Hello ". "$fname "."<br/>$lname "."!". "<br/>Your phone number is: ". $pnumber);
?>
