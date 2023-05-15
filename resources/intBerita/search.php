<?php

	$conn = mysqli_connect("localhost", "root", "", "ria_news");

	$query = $_GET['query'];

	$sql = "SELECT * FROM berita_terkini WHERE judul LIKE '%$query%'";
	$sqll = "SELECT * FROM berita_terpopuler WHERE judul LIKE '%$query%'";

	$result = mysqli_query($conn, $sql);
	$resultt = mysqli_query($conn, $sqll);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cari Berita | RIA.NEWS</title>

	<link rel="icon" type="png" href="../../img/icon.png">

	<link rel="stylesheet" type="text/css" href="../../css/style2.css?<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="../../css/dropdown.css?<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="../../css/carousel.css?<?php echo time(); ?>">

	<link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css?<?php echo time(); ?>">
	<link rel="stylesheet" href="../../assets/fontawesome/css/all.css">
</head>
<body>

	<?php include '../' . 'header/' . 'headerBerita.php' ?>

	<?php

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {

		echo "

		<div class='card mb-3' style='padding: 30px;'>
			<div class='row g-0'>
				<div class='col-md-4'>
					<img src='../../img/terkini/$row[gambar]' class='img-fluid' alt='...'>
				</div>
				<div class='col-md-8'>
					<div class='card-body'>
						<h5 class='card-title'>$row[judul]</h5>
						<p class='card-text'>T$row[deskripsi]</p>
					</div>
				</div>
			</div>
		</div>

		";
		}
	} elseif (mysqli_num_rows($resultt) > 0) {
		while ($roww = mysqli_fetch_assoc($resultt)) {

		echo "

        <div class='card mb-3' style='padding: 30px;'>
			<div class='row g-0'>
				<div class='col-md-4'>
					<img src='../../img/populer/$roww[gambar]' class='img-fluid' alt='...'>
				</div>
				<div class='col-md-8'>
					<div class='card-body'>
						<h5 class='card-title'>$roww[judul]</h5>
						<p class='card-text'>T$roww[deskripsi]</p>
					</div>
				</div>
			</div>
		</div>

		";
		}
	} else {
		echo "No results found.";
	}

?>

<?php include '../' . 'footer/' . 'footerTentang.php' ?>

</body>
</html>