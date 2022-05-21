<?php 
session_start(); // memulai session
$user = $_SESSION['member'];
$role = $user['role'];
require_once 'koneksi_db.php';
// gunakan fungsi pdo
// $sql = "SELECT * FROM gedung";
// // eksekusi query diatas, lalu ambil hasilnya
// $data = $dbh->query($sql);
// print_r($data);
// exit();

require_once 'models/gedung.php';
require_once 'models/fasilitas.php';
require_once 'models/kategoriRuangan.php';
require_once 'models/ruangan.php';
require_once 'models/member.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Pinjam Ruang</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/house-favicon-2.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <?php include_once 'frontend/header.php' ?>
    <!-- Header Area End -->

    <!----- awal area link internal ----->
    <?php 
    $hal = $_GET['hal'];
    if ($hal == 'home') {
        include_once 'frontend/home.php';
    } if (!empty($hal)) {
        include_once 'views/'.$hal.'.php';
    } else {
        include_once 'frontend/home.php';
    }
    ?>
    <!----- akhir area link internal ----->
    
    <br>
    <!-- Call To Action Area Start -->
    <?php include_once 'frontend/contact.php' ?>
    <!-- Call To Action Area End -->

    <!-- Partner Area Start -->
    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-content d-flex align-items-center justify-content-around wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p1.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p3.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p4.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Area End -->

    <!-- Footer Area Start -->
    <?php include_once 'frontend/footer.php' ?>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>