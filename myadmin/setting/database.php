<?php

		$db_host = "localhost";
		$db_user = "root";
		$db_password ="";
		$db_name = "disducapilsemarang";
		

		$koneksi = mysqli_connect($db_host, $db_user, $db_password, $db_name);

		if (!$koneksi) {
		die("Gagal Terkoneksi ".mysqli_connect_error(). " - ".mysqli_connection_error() );
		exit();

		}
		?>
