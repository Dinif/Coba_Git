<?php
	include 'koneksi2.php';

	$query = $con->query("SELECT * FROM tb_kategori");
	$result = array();

	while($fetchData = $query->fetch_assoc()){
		$result[] = $fetchData;
	}

	echo json_encode($result);
 ?>