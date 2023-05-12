<?php 

	echo '

		<header>
			<div class="d-flex">
				<div class="p-2">
					<img src="../img/logoSlogan.png" height="100px">
				</div>
			</div>
		</header>

		<nav class="d-flex sticky-top">
			<div class="me-auto p-2">
				<ul class="nav">
					<li class="nav-link"><a href="../index.php">Beranda</a></li>
					<div class="dropdown">
						<li class="nav-link">
							<a class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori Berita</a>
						</li>
						<ul class="dropdown-menu">
							<li><a href="intBerita/terkini.php" class="dropdown-item">Berita Terkini</a></li>
							<li><a href="intBerita/populer.php" class="dropdown-item">Berita Populer</a></li>
						</ul>
					</div>
					<li class="nav-link"><a href="tentang.php">Tentang</a></li>
					<li class="nav-link"><a href="kontak.php">Kontak</a></li>
				</ul>
			</div>

			<div class="p-2">
	  			<input type="text" name="" class="cari" id="cari" placeholder="Cari berita ...">
	  		</div>
		</nav>

	';

 ?>