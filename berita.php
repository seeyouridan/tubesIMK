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

            echo "<h1>$judul</h1>";
            echo "<img src='img/terkini/$gambar' alt='Gambar Berita'>";
            echo "<p>$deskripsi</p>";
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

            echo "<h1>$judul</h1>";
            echo "<img src='img/populer/$gambar' alt='Gambar Berita'>";
            echo "<p>$deskripsi</p>";
        } else {
            echo "Berita tidak ditemukan.";
        }
    } else {
        echo "ID berita tidak ditemukan.";
    }

    mysqli_close($conn);
?>
