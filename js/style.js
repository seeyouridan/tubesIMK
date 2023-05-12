function infoBerita() {
	let parent = document.getElementById('info');
	let info = [
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
	]

	let newKonten = "";
	info.forEach((info) => {
		newKonten += `
		<div class="card"">
			<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">Berita Terkini</span>
			<img src="${info.gambar}" height="200px">
			<hr>
			<div class="card-body">
				<h5 class="card-title">${info.judul}</h5>	
				<p class="card-text">${info.desc}</p>
			</div>
        </div>
		`
	})
	parent.innerHTML = newKonten;

	let parent2 = document.getElementById('ingfo');
	let ingfo = [
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
		{
			judul: "lorem ipsum",
			gambar: "img/icon.png",
			desc: "lorem ipsum dolor sit amet",
		},
	]

	let kontenBaru = "";
	ingfo.forEach((ingfo) => {
		kontenBaru += `
		<div class="card"">
			<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">Berita Terpopuler</span>
			<img src="${ingfo.gambar}" height="200px">
			<hr>
			<div class="card-body">
				<h5 class="card-title">${ingfo.judul}</h5>	
				<p class="card-text">${ingfo.desc}</p>
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