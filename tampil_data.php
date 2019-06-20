<?php
	include 'koneksi.php';

	$query = "SELECT * FROM tb_kategori";
	$select_stmt = $con->prepare($query);
	$select_stmt->execute();
	$result = array();

	while($row = $select_stmt->fetch(PDO::FETCH_ASSOC)){
		$result[] = $row;
	}

	echo json_encode($result);
 ?>