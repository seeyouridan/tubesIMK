<?php 

	include '../' . '../' . 'koneksi.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Berita Terkini | RIA.NEWS</title>

	<link rel="icon" type="png" href="../../img/icon.png">

	<link rel="stylesheet" type="text/css" href="../../css/style2.css?<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="../../css/dropdown.css?<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="../../css/carousel.css?<?php echo time(); ?>">

	<link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/fontawesome/css/all.css">
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="../../js/script.js"></script>

	<?php include '../' . 'header/' . 'headerBerita.php' ?>

	<div class="container">
		<?php if (mysqli_num_rows($query2) > 0) { ?>
		<?php $no = 1;
			while ($data = mysqli_fetch_array($query2)) {
		?>

		<div class="card mb-3">
			<div class="row g-0">
				<div class="col-md-4">
					<?php echo "<img src='../../img/terkini/$data[gambar]' class='img-fluid'>" ?>
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<?php echo "<h5 class='card-title'>$data[judul]</h5>"; ?>
						<div class="showContent-frame">
						<?php
							$showContent = "<p class='card-text'>$data[deskripsi]</p>";
							$showFronted = explode('##', $showContent);

							echo '<div class="showFronted1">' . $showFronted[0] . '</div>';
							
							if (isset($showFronted[1])) {
								echo '<div class="showFronted2" style="display: none;">' . $showFronted[1] . '</div>';
							} else {
								echo '<div class="showFronted2" style="display: none;"></div>';
							}
						?>

						<div class="showContent-btn">
							<button class="btn btn-outline-primary btn-block btn1">Selengkapnya<i class="fa fa-angle-down pl-2" aria-hidden="true"></i></button>
							<button class="btn btn-outline-warning btn-block btn2" style="display: none;">Sembunyikan<i class="fa fa-angle-up pl-2" aria-hidden="true"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php $no++; } ?>
		<?php } ?>
	</div>

	<?php include '../' . 'footer/' . 'footer.php' ?>
</body>
</html>