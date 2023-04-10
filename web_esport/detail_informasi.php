<?php 

require_once 'koneksi.php';
if (!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_artikel WHERE id = $id");
$artikel = mysqli_fetch_assoc($query);
$aktif = 'artikel';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Detail - Informasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="main.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <h1><a href="">SMANIS</a></h1>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li class="active"><a href="informasi.php">ARTIKEL</a></li>
                <li><a href="siswa.php">SISWA</a></li>
                <li><a href="guru.php">GURU</a></li>
                <li><a href="bukutamu.php">CONTACT</a></li>
                <li><a href="admin.php">ADMIN</a></li>
            </ul>
        </div>
    </header>

    <section class="banner">
        <h2>WELCOME TO SMANIS</h2>
    </section>

    <section class="about">
        <div class="container">
            <h3><?= $artikel['judul'] ?> (<?= date('d M y', strtotime($artikel['tanggal'])) ?>)</h3>
        </div>
    </section>

    <section id="isi1" class="isi">
        <img src="images/artikel/<?= $artikel['foto'] ?>" alt="" width="100%" class="float-left mb-3 img-thumbnail">
        <?= $artikel['isi'] ?>

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
                <li><a href="detail_informasi.php?id=<?= $artikel_terbaru['id'] ?>"
                        class="list-group-item list-group-item-action"><?= $artikel_terbaru['judul'] ?></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div class="lista">
            <ul>
                <li class="atas"><span>Kategori</span></li>
                <?php while($kategori_artikel = mysqli_fetch_assoc($query_kategori_artikel)) : ?>
                <li><a href="kategori.php?id=<?= $kategori_artikel['id'] ?>"
                        class="list-group-item list-group-item-action"><?= $kategori_artikel['nama_kategori'] ?></a>
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