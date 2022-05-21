<?php 
require_once 'koneksi_db.php';
// gunakan fungsi pdo
$sql = "SELECT * FROM gedung";
// eksekusi query diatas, lalu ambil hasilnya
$data = $dbh->query($sql);
?>
    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
    <div class="section-heading align-items-center text-center wow fadeInUp" data-wow-delay="100ms">
            <h6>Our Rooms</h6>
            <h2>Selamat Datang ke<br>Pinjam Ruangan</h2>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Data -->
                        <?php 
                        foreach ($data as $dg) {
                        ?>
                        <!-- Data -->
                    <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/43.jpg" alt="">
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                            <h2><?= $dg['nama']; ?></h2>
                            <h6><span><?= $dg['kode']; ?></span></h6>
                            <h4>400$ <span>/ Day</span></h4>
                            <div class="room-feature">
                                <h6>Size: <span>30 ft</span></h6>
                                <h6>Capacity: <span>Max persion 5</span></h6>
                                <h6>Address: <span><?= $dg['alamat']; ?></span></h6>
                            </div>
                            <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <?php 
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->
