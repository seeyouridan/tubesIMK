<?php 

	echo '

		<header>
			<div class="d-flex">
				<div class="p-2">
					<img src="img/logoSlogan.png" height="100px">
				</div>
			</div>
		</header>

		<nav class="d-flex sticky-top">
			<div class="me-auto p-2">
				<ul class="nav">
					<li class="nav-link"><a href="index.php">Beranda</a></li>
					<div class="dropdown">
						<li class="nav-link">
							<a class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori Berita</a>
						</li>
						<ul class="dropdown-menu">
							<li><a href="resources/intBerita/terkini.php" class="dropdown-item">Berita Terkini</a></li>
							<li><a href="resources/intBerita/populer.php" class="dropdown-item">Berita Populer</a></li>
						</ul>
					</div>
					<li class="nav-link"><a href="resources/tentang.php">Tentang</a></li>
					<li class="nav-link"><a href="resources/kontak.php">Kontak</a></li>
				</ul>
			</div>

			<div class="p-2">
	  			<form action="resources/intBerita/search.php" method="GET">
	  				<input type="text" name="query" class="cari" placeholder="Cari berita ...">
	  			</form>
	  		</div>
		</nav>

	';

 ?>