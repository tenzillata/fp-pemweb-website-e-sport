<?php
require_once 'cek_session.php';
$base_url = "http://localhost/web_esport/" 
?>
<nav class="navbar navbar-expand-sm bg-danger navbar-dark ">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item mr-3">
                <a class="nav-link <?= $active == 'dashboard' ? 'active' : '' ?>"
                    href="<?= $base_url ?>admin">KNIGHTS</a>
            </li>
            <li class="nav-item mr-3">
                <a class="nav-link" href="<?= $base_url ?>" target=" _blank">Lihat Website</a>
            </li>
            <li class="nav-item dropdown mr-3">
                <a class="nav-link <?= $active == 'artikel' ? 'active' : '' ?> dropdown-toggle" href="#" id="navbardrop"
                    data-toggle="dropdown">Artikel</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= $base_url ?>admin/kategori_artikel/index.php">Data Kategori
                        Artikel</a>
                    <a class="dropdown-item" href="<?= $base_url ?>admin/artikel/index.php">Data Artikel</a>
                </div>
            </li>
            <li class="nav-item dropdown mr-3">
                <a class="nav-link <?= $active == 'master' ? 'active' : '' ?> dropdown-toggle" href="#" id="navbardrop"
                    data-toggle="dropdown">Data</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= $base_url ?>admin/guru/index.php">Data Guru</a>
                    <a class="dropdown-item" href="<?= $base_url ?>admin/siswa/index.php">Data Siswa</a>
                    <a class="dropdown-item" href="<?= $base_url ?>admin/jurusan/index.php">Data Jurusan</a>

                </div>
            </li>
            <li class="nav-item mr-3">
                <a class="nav-link <?= $active == 'bukutamu' ? 'active' : '' ?> "
                    href="<?= $base_url ?>admin/bukutamu.php">Pesan</a>
            </li>

            <li class="nav-item mr-3">
                <a class="nav-link" href="<?= $base_url ?>admin/logout.php"
                    onclick="return confirm('Konfirmasi?')">Logout</a>
            </li>
        </ul>
    </div>
</nav>