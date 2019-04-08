<?php
$koneksi = mysqli_connect 
			(
				"localhost",
				"id8194880_cruid1",
				"vanvan971",
				"id8194880_cruid"
			);
if (mysqli_connect_errno())
	{
		echo "Koneksi Gagal"
		.mysqli_connect_error();
	}
?>
