function infoBerita() {
	let parent = document.getElementById('info');
	let info = [
		{
			judul: "5 Kontroversi SEA Games 2023 di Kamboja: Bendera Indonesia Terbalik hingga Kursi Plastik",
			gambar: "img/terkini/5kontroversi.jpeg",
		},
		{
			judul: "Jokowi Kucurkan Rp 800 M Perbaiki 15 Ruas Jalan, Pemprov Lampung Rp 750 M untuk 14 Ruas, Jalan yang Sama?",
			gambar: "img/terkini/lampung.jpg",
		},
		{
			judul: "Korban Penipuan dengan Modus “Like-Subscribe” Ternyata Sudah Banyak, Pelaku Diduga Sindikat",
			gambar: "img/terkini/like.jpg",
		},
		{
			judul: "6 Fakta Menarik Rumah Abah Jajang di Curug Citambur",
			gambar: "img/terkini/abah.jpeg",
		},
	]

	let newKonten = "";
	info.forEach((info) => {
		newKonten += `
		<div class="card"">
			<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">Berita Terkini</span>
			<img src="${info.gambar}">
			<div class="card-body">
				<a href="resources/intBerita/terkini.php"><h5 class="card-title">${info.judul}</h5></a>
			</div>
        </div>
		`
	})
	parent.innerHTML = newKonten;

	let parent2 = document.getElementById('ingfo');
	let ingfo = [
		{
			judul: "Terpopuler Bisnis: Cerita Nasabah BSI Kesulitan Tarik Uang, KompasTV Digugat Youtuber Binaan KCIC",
			gambar: "img/populer/bsi.jpg",
		},
		{
			judul: "Prosedur Pencairan Dana Stimultan Korban Gempa Cianjur, Ini yang Perlu Dilakukan Bagi yang Belum Cair",
			gambar: "img/populer/cianjur.jpg",
		},
		{
			judul: "5 Update Perolehan Medali SEA Games 2023: Indonesia Kumpulkan 74 Emas!",
			gambar: "img/populer/74emas.jpg",
		},
		{
			judul: "McDonald’s Kini Hadir di Cianjur loh!",
			gambar: "img/populer/mcd.jpg",
		},
	]

	let kontenBaru = "";
	ingfo.forEach((ingfo) => {
		kontenBaru += `
		<div class="card">
			<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">Berita Terpopuler</span>
			<img src="${ingfo.gambar}">
			<div class="card-body">
				<a href="resources/intBerita/populer.php"><h5 class="card-title">${ingfo.judul}</h5></a>
			</div>
        </div>
		`
	})
	parent2.innerHTML = kontenBaru;
}

let docTitle = document.title;
window.addEventListener("blur", () => {
    document.title = "Kemana bang? :(";
});

window.addEventListener("focus", () => {
    document.title = docTitle;
});

$(document).ready(function() {
	$(".showContent-btn .btn1").click(function() {
		$(this).closest('.showContent-frame').find('.showFronted2').slideDown('slow');
		$(this).fadeOut('slow');
		$(this).closest('.showContent-btn').find('.btn2').fadeIn('slow');
	});

	$(".showContent-btn .btn2").click(function() {
		$(this).closest('.showContent-frame').find('.showFronted2').slideUp('slow');
		$(this).fadeOut('slow');
		$(this).closest('.showContent-btn').find('.btn1').fadeIn('slow');
	});
});