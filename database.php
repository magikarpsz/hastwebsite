<?php

	$server = "us-cdbr-iron-east-02.cleardb.net";
	$username = "b681ecf6a851e0";
	$password = "2b4b8c0a";
	$database = "heroku_15afe038ca5ca62";

	$conn = new mysqli($server, $username, $password, $database);

	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}

	$name = $_POST['name'];
	$email = $_POST['email'];

	$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
	if($conn->query($sql) === TRUE){
		echo "Data entered into table";
	}
	else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
?>
