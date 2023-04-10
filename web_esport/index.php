<?php 

require_once 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tbl_artikel");

$aktif = 'home';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>HOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="main.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <h1><a href="">SMANIS</a></h1>
            <ul>
                <li class="active"><a href="index.php">HOME</a></li>
                <li><a href="informasi.php">ARTIKEL</a></li>
                <li><a href="siswa.php">SISWA</a></li>
                <li><a href="guru.php">GURU</a></li>
                <li><a href="bukutamu.php">CONTACT</a></li>
                <li><a href="admin.php">ADMIN</a></li>
            </ul>
        </div>
    </header>

    <section class="banner">
        <h2>WELCOME TO SMAN 1 SIDOARJO</h2>
    </section>

    <section class="about">
        <div class="container">
            <h3
                style="padding: 0px; border: 1px solid; font-size: 40px; background-color:#dda3fd; border-radius: 10px;">
                INFORMASI TERBARU</h3>
            <p style="font-size: 20px; padding-top: 10px;">Halaman ini berisi informasi-informasi terbaru terkait
                artikel
                .</p>
        </div>
    </section>

    <section class="isi">
        <?php while($artikel = mysqli_fetch_assoc($query)) : ?>

        <div class="informasi">
            <span class="tgl"><?= date('d M y', strtotime($artikel['tanggal'])) ?></span>
            <span class="judul"><a
                    href="detail_informasi.php?id=<?= $artikel['id'] ?>"><?= $artikel['judul'] ?></a></span>
        </div>
        <div class="detail">
            <div class="clearfix" style="text-align: justify">
                <img src="images/artikel/<?= $artikel['foto'] ?>" alt="" width="200px" />
                <?= substr($artikel['isi'], 0, 150) . '...' ?>
            </div>
        </div>
        <hr>

        <?php endwhile; ?>

    </section>
    <section class="list-box">
        <?php 

$query_artikel_terbaru = mysqli_query($koneksi, "SELECT * FROM tbl_artikel ORDER BY tanggal ASC LIMIT 4");
$query_kategori_artikel= mysqli_query($koneksi, "SELECT * FROM tbl_kategori_artikel LIMIT 4");

?>
        <div class="lista">
            <ul>
                <li class="atas"><span>Artikel</span></li>
                <?php while($artikel_terbaru = mysqli_fetch_assoc($query_artikel_terbaru)) : ?>
                <li>
                    <a href="detail_informasi.php?id=<?= $artikel_terbaru['id'] ?>">
                        <?= $artikel_terbaru['judul'] ?></a>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div class="lista">
            <ul>
                <li class="atas"><span>Kategori</span></li>
                <?php while($kategori_artikel = mysqli_fetch_assoc($query_kategori_artikel)) : ?>
                <li>
                    <a href="kategori.php?id=<?= $kategori_artikel['id'] ?>">
                        <?= $kategori_artikel['nama_kategori'] ?></a>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
    <footer>
        <div class="container">
            <small>Copyright &copy; 2022 - Ten.dkk. All Right Reserved</small>
        </div>
    </footer>
</body>

</html>