<!-- <?php

	$servername = "localhost";
	$username = "root";
	//SET password FOR root@localhost = password('your_root_password');
	$password = "";
	//SET PASSWORD FOR root@localhost = PASSWORD('your_root_password');
	$dbname = "Bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
   
	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?> -->

<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>