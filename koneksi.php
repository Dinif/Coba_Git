<?php
	$host="localhost";
	$username="root";
	$password="";
	$name="db_testtoko";

	try{
		$con=new PDO("mysql:host={$host};dbname={$name}", $username, $password);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
 ?>