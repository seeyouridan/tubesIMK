<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tentang Kami | RIA.NEWS</title>

	<link rel="icon" type="png" href="../img/icon.png">

	<link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="../css/dropdown.css?<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="../css/carousel.css?<?php echo time(); ?>">

	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/fontawesome/css/all.css">
</head>
<body>
	<?php include 'header/' . 'header.php' ?>

	<div class="content">
		<div class="accordion" id="accordionExample">
			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<h4>Tentang Kami</h4>
					</button>
				</h2>
				<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<p>RIA News merupakan sebuah website penyedia berita secara online yang menyediakan kumpulan berita dari berbagai sumber terpercaya yang dikategorikan menjadi berita terkini dan terpopuler.</p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						<h4>Tujuan</h4>
					</button>
				</h2>
				<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<p>Tujuan kami membuat website ini selain untuk memenuhi tugas besar adalah sebagai website yang dibuat dengan mengimplementasikan pemahaman kelompok kami mengenai materi matakuliah IMK sebagai UI Desain dan matakuliah lain sebagai bekal merancang website ini.</p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						<h4>Logo dan Warna</h4>
					</button>
				</h2>
				<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<p>Tulisan RIA sebagai nama dari logo website kami merupakan inisial awal dari masing-masing anggota kelompok kami, yang berisinial tiga R, dua  I, dan satu A. Lalu, untuk icon logo kami bergambar pecahan dunia. Untuk warna logo yang kami pergunakan hijau sage dengan saturasi warna RGB(246, 255, 248), yang setelah kami pertimbangkan cocok dengan warna halaman putih dan biru dengan saturasi warna yang diambil dari <code>color: #f6fff8;</code></p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php include 'footer/' . 'footerTentang.php' ?>

	<script type="text/javascript" src="../js/script.js"></script>

	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>