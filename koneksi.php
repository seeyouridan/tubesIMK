<?php 

	$host = "localhost";
	$name = "root";
	$pass = "";
	$db = "ria_news";

	$conn = mysqli_connect($host, $name, $pass, $db);

	$query = mysqli_query($conn, "SELECT * FROM berita_terpopuler");
	$query2 = mysqli_query($conn, "SELECT * FROM berita_terkini");

 ?>