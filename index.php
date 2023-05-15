<?php 

	include 'koneksi.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Beranda berita | RIA.NEWS</title>

	<link rel="icon" type="png" href="img/icon.png">

	<link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/dropdown.css?<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/carousel.css?<?php echo time(); ?>">

	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/fontawesome/css/all.css">
</head>
<body>

	<?php include 'resources/' . 'header/' . 'headerIndex.php'; ?>

	<div class="header">
		<div id="carouselGambar" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselGambar" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselGambar" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselGambar" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="bayangan"></div>
					<div class="carousel-caption d-none d-md-block">
						<p>Berita informasi mengenai acara SEA GAMES 2023 di Camboja</p>
					</div>
					<img src="img/items/slide1.jpg">
				</div>
				<div class="carousel-item">
					<div class="bayangan"></div>
					<div class="carousel-caption d-none d-md-block">
						<p>Berita seputar rumah Aki Jajang yang memiliki pemandangan curug yang sangat indah</p>
					</div>
					<img src="img/terkini/abah.jpeg">
				</div>
				<div class="carousel-item">
					<div class="bayangan"></div>
					<div class="carousel-caption d-none d-md-block">
						<p>Kunjungan Bapak Presiden Republik Indonesia ke lampung untuk melihat penampakan jalanan melebar yang rusak, Jokowi : "Jalanannya, mulus"</p>
					</div>
					<img src="img/items/slide3.jpeg">
				</div>
			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#carouselGambar" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselGambar" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</button>
		</div>
	</div>

	<section>
		<div class="container">
			<?php if (mysqli_num_rows($query2) > 0) { ?>
				<?php 
					$no = 1;
					while ($data = mysqli_fetch_array($query2)) {
						$id = $data['id_terkini'];
				?>
			<div class="card">
				<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">Berita Terkini</span>
				<?php echo "<img src='img/terkini/$data[gambar]'>"; ?>	
				<div class="card-body">
					<?php echo "<a href='berita.php?id_terkini=$id'><h6 class='card-title'>$data[judul]</h6></a>"; ?>
				</div>
			</div>

			<?php $no++; } ?>
		<?php } ?>

		<hr>

		<?php if (mysqli_num_rows($query) > 0) { ?>
			<?php $no = 1;
				while ($data2 = mysqli_fetch_array($query)) {
					$id2 = $data2['id_populer'];
				?>
			<div class="card">
				<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">Berita Populer</span>
				<?php echo "<img src='img/populer/$data2[gambar]'>"; ?>
				<div class="card-body">
					<?php echo "<a href='berita.php?id_populer=$id2'><h6 class='card-title'>$data2[judul]</h6></a>"; ?>
				</div>
			</div>

			<?php $no++; } ?>
		<?php } ?>
	    </div>
	</section>

	<?php include 'resources/' . 'footer/' . 'footer.php'; ?>

	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.js"></script>

	<script type="text/javascript" src="js/script.js?<?php echo time(); ?>"></script>
</body>
</html>