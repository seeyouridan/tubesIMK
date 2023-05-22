<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Loading</title>
</head>
<body>
	<div id="app" style="display: flex; justify-content: center; align-items: center; height: 100vh;"></div>

	<script type="text/javascript">
		window.onload = function() {
			let id = document.getElementById('app');
			let loading = document.createElement('div');

			loading.textContent = "LOADING";
			loading.style.fontSize = "50px";
			loading.style.fontStyle = "bold";
			loading.style.fontFamily = "Pixeloid Sans";
			id.appendChild(loading);

			let loaded = setInterval(() => {
				loading.textContent = loading.textContent + ".";
			}, 1000);

			setTimeout(() => {
				clearInterval(loaded);
				window.location.href = "index.php";
			}, 3000);
		}
	</script>
</body>
</html>