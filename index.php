<!DOCTYPE html>
<html>
<head>
	<title>Toko PKK</title>
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
	<h1>Data Kategori</h1>
	<br>
	<table style="width:50%">
		<thead>
			<th>ID KATEGORI</th>
			<th>NAMA KATEGORI</th>
		</thead>
		<tbody id="barisData">

		</tbody>
	</table>

	<script>
		$.ajax({
			type: "GET",
			data: "",
			url: 'tampil_data.php',
			success: function(result){
				var objResult=JSON.parse(result);
				var no=1;
				$.each(objResult, function(key,val){
					var barisBaru=$("<tr>");
					barisBaru.html("<td>"+no+"</td><td>"+val.kategori+"</td>");
					var dataHandler=$("#barisData");
					dataHandler.append(barisBaru);
					no++;
				})
			}
		})
	</script>
</body>
</html>