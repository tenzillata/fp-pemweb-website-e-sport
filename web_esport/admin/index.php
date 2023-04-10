<?php 
require_once 'cek_session.php';
$active = 'dashboard';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
</head>

<body>
    <?php require_once 'navbar.php'; ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        Halo Admin!
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../resources/js/jquery.js"></script>
    <script src="../resources/js/bootstrap.min.js"></script>
</body>

</html>