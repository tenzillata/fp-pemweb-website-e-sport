<?php 

session_start();

$active = 'dashboard';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Admin</title>

    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .asup {
        background-image: url(images/esport.jpg);
        background-size: cover;
        padding: 16px;
    }

    form {
        border: 3px solid #f1f1f1;
        padding: 16px 32px 16px 16px;

    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .btn {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 20px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        text-decoration: none;
    }

    .btn:hover {
        opacity: 0.8;
    }




    button:hover {
        opacity: 0.8;
    }
    </style>
</head>

<body class="asup">
    <div class="card shadow">
        <div class="card-body">
            <?php if(isset($_SESSION['sukses'])) : ?>
            <div class="alert" role="alert">
                <strong>Berhasil!</strong> <?= $_SESSION['sukses'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php unset($_SESSION['sukses']) ?>
            <?php elseif(isset($_SESSION['gagal'])) : ?>
            <div class="alert" role="alert">
                <strong>Gagal!</strong> <?= $_SESSION['gagal'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php unset($_SESSION['gagal']) ?>
            <?php endif; ?>

            <form action="proses_login.php" method="POST">
                <div class="form-group">
                    <label style="color:red" for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username"
                        autocomplete="off" required="required">
                </div>
                <div class="form-group">
                    <label style="color:red" for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                        autocomplete="off" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" name="login" class="btn">LOGIN</button>

                </div>

                <a id="btn" class="btn" href="index.php" role="button">Kembali</a>
            </form>

        </div>
    </div>



</body>

</html>