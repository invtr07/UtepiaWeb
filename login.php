<?php
	include('DBconnect.php');

	$firstname=$_POST['Fname'];
	$email=$_POST['email'];
	$password=$_POST['Pass'];


	$s= "select * from Customers where Firstname= '$firstname' && Email ='$email' && Password = '$pass'";

	$result = mysqli_query($s);

	$num = mysqli_num_rows ($result);

	if ($num == 1) {
		header ('location: Menu.html');
	}
	else {
		echo (ERROR login!!);
	}
?>
