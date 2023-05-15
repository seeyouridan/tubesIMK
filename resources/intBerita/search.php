<?php
// Establish a database connection
$conn = mysqli_connect("localhost", "root", "", "ria_news");

// Retrieve the search query from the form submission
$query = $_GET['query'];

// Perform the database query
$sql = "SELECT * FROM berita_terkini WHERE judul LIKE '%$query%'";
$result = mysqli_query($conn, $sql);

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
    // Display the search results
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        // Display the relevant data from each row
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
    } else {
      echo "No results found.";
    }

  ?>

  <?php include '../' . 'footer/' . 'footerTentang.php' ?>
</body>
</html>