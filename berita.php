<?php include 'resources/' . 'header/' . 'headerIndex.php'; ?>

<?php
    include 'koneksi.php';

    if (isset($_GET['id_terkini'])) {
        $id = $_GET['id_terkini'];

        $query2 = "SELECT * FROM berita_terkini WHERE id_terkini = $id";
        $result2 = mysqli_query($conn, $query2);

        if ($result2 && mysqli_num_rows($result2) > 0) {
            $row = mysqli_fetch_assoc($result2);

            $judul = $row['judul'];
            $gambar = $row['gambar'];
            $deskripsi = $row['deskripsi'];

            echo "
                <div class='berita'>
                       <div class='head'>
                           <center><h1>$judul</h1></center>
                       </div>

                    <div class='gambar'>
                        <center><img src='img/terkini/$gambar' alt='Gambar Berita'></center>
                    </div>

                    <div class='desc'>
                        <p>&nbsp;&nbsp;&nbsp;$deskripsi</p>
                    </div>
                </div>
            ";
        } else {
            echo "Berita tidak ditemukan.";
        }
    } elseif (isset($_GET['id_populer'])) {
        $id2 = $_GET['id_populer'];

        $query = "SELECT * FROM berita_terpopuler WHERE id_populer = $id2";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

        $judul = $row['judul'];
        $gambar = $row['gambar'];
        $deskripsi = $row['deskripsi'];

        echo "
            <div class='berita'>
                   <div class='head'>
                       <center><h1>$judul</h1></center>
                   </div>

                <div class='gambar'>
                    <center><img src='img/populer/$gambar' alt='Gambar Berita'></center>
                </div>

                <div class='desc'>
                    <p>&nbsp;&nbsp;&nbsp;$deskripsi</p>
                </div>
            </div>
        ";
        } else {
            echo "Berita tidak ditemukan.";
        }
    } else {
        echo "ID berita tidak ditemukan.";
    }

    mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $judul; ?></title>

    <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/dropdown.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/carousel.css?<?php echo time(); ?>">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
</head>
<body>

    <?php include 'resources/' . 'footer/' . 'footer.php'; ?>
</body>
</html>