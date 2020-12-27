<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'harika', 'test1234', 'blog');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>