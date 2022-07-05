<?php 
session_start();

	$email = $_POST['email'];
	//$password = $_POST['password'];

	$conn=mysqli_connect("localhost","root","","bank");
	//m$conn,ysql_select_table("login");
	$result=mysqli_query($conn,"SELECT * FROM users WHERE email='$email' ) 
	-- or die("Failed to query database".mysqli_error($conn));
	$row=mysqli_fetch_array($result);
	if ($row['email']==$email){
		$_SESSION['email']=$email;
		header("Location: transfermoney.php");
		exit();
	}else{
		echo"Failed to Login";
	}
?>
