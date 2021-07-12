<?php
	
	//set connection variables
	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_database = "ctlrpnl";
	$db_port = 3306;
	
	//connection to server & database
	$conn = mysqli_connect($db_host, $db_user, $db_password, $db_database );
	
	//check connection
	if(!$conn){
	die("Connect failed:" .
	mysqli_connect_error());
	}
	echo"Connection successfuly";
	
	$select="select from direction vlaues()";
	$q=mysqli_query($conn,$select);
	
	$Forward = $_POST['Forward'];
	$Backward = $_POST['Backward'];
	$Left = $_POST['Left1'];
	$Right = $_POST['Right1'];
	$Stop = $_POST['Stop'];
	
	
	
	if(isset($_POST['Forward'])){
	
	echo "<br>";
	
	$my_query = "";
	
	$my_query = "select * from direction WHERE 1 ";
	$result = mysqli_query($conn, $my_query);
	
	$my_query = "INSERT INTO direction (Forward) VALUES ('Forward')";
	$result = mysqli_query($conn, $my_query);
	if($result)
	{
	echo "Item successfuly Added!";
	}
	else{
	echo "ERROR: Unable to past <br>";
	}
	
	}else if(isset($_POST['Backward'])) {
	echo "<br>";
	
	$my_query = "";
	
	$my_query = "select * from direction WHERE 2 ";
	$result = mysqli_query($conn, $my_query);
	
	$my_query = "INSERT INTO direction (Backward) VALUES ('Backward')";
	$result = mysqli_query($conn, $my_query);
	if($result)
	{
	echo "Item successfuly Added!";
	}
	else{
	echo "ERROR: Unable to past <br>";
	}
	
	}else if(isset($_POST['Left1'])) {
	echo "<br>";
	
	$my_query = "";
	
	$my_query = "select * from direction WHERE 3 ";
	$result = mysqli_query($conn, $my_query);
	
	$my_query = "INSERT INTO direction (Left) VALUES ('Left1')";
	$result = mysqli_query($conn, $my_query);
	if($result)
	{
	echo "Item successfuly Added!";
	}
	else{
	echo "ERROR: Unable to past <br>";
	}
	}else if(isset($_POST['Right1'])) {
	echo "<br>";
	
	$my_query = "";
	
	$my_query = "select * from direction WHERE 4 ";
	$result = mysqli_query($conn, $my_query);
	
	$my_query = "INSERT INTO direction (Right) VALUES ('Right1')";
	$result = mysqli_query($conn, $my_query);
	if($result)
	{
	echo "Item successfuly Added!";
	}
	else{
	echo "ERROR: Unable to past <br>";
	}
	}else if(isset($_POST['Stop'])) {
	echo "<br>";
	
	$my_query = "";
	
	$my_query = "select * from direction WHERE 5 ";
	$result = mysqli_query($conn, $my_query);
	
	$my_query = "INSERT INTO direction (Stop) VALUES ('Stop')";
	$result = mysqli_query($conn, $my_query);
	if($result)
	{
	echo "Item successfuly Added!";
	}
	else{
	echo "ERROR: Unable to past <br>";
	}
	}
	
	?>

