<?php
session_start();
require 'config/config.php';

if (isset($_POST["submit"])) {

    $email = mysqli_escape_string($koneksi, $_POST["email"]);
    $password = mysqli_escape_string($koneksi, $_POST["password"]);

    $result = mysqli_query($koneksi, "SELECT * FROM tbl_users WHERE email = '$email'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        //Save Session Login
        $_SESSION['id_users']     = $row['id_users'];
        $_SESSION['nama']         = $row['nama'];
        $_SESSION['email']        = $row['email'];
        $_SESSION['image']        = $row['image'];
        $_SESSION['level']        = $row['level'];

        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["submit"] = true;

            if ($row['level'] == "admin") {
                echo "
				<META HTTP-EQUIV='Refresh' Content='0; URL=admin/index.php'>";
                exit;
            } elseif ($row['level'] == "user") {
                echo "
				<META HTTP-EQUIV='Refresh' Content='0; URL=user/index.php'>";
                exit;
            } else {
                echo "<script>alert('Login Gagal !!!');document.location.href='index.php'</script>/n";
            }
            exit;
        }
    }

    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Perpustakaan</title>

    <!-- Custom fonts for this template-->
    <link href="admin/assets/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/assets/template/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Perpustakaan!</h1>
                                    </div>
                                    <?php if (isset($error)) : ?>
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <strong>Warning!</strong> Email & Password Salah.
                                        </div>
                                    <?php endif; ?>
                                    <form class="user" action="" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Password">
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Lupa Kata Sandi?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="daftar.php">Daftar Akun!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/assets/template/vendor/jquery/jquery.min.js"></script>
    <script src="admin/assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/assets/template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/assets/template/js/sb-admin-2.min.js"></script>

</body>

</html>