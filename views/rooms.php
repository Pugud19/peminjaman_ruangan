<?php 
if (isset($ser)) {
?>
    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
    <div class="section-heading align-items-center text-center wow fadeInUp" data-wow-delay="100ms">
            <h6>Our Rooms</h6>
            <h2>Selamat Datang ke<br>Pinjam Ruangan</h2>
    </div>
        <div class="container">
            <div class="row">
                                    <!-- Data -->
                <!-- Data Gedung Area -->
                <?php 
                // ciptakan object dari class gedung
                $obj = new Gedung();
                // panggil fungsi menampilkan data gedung
                $rs = $obj->getAll();
                // looping data gedung 
                foreach($rs as $g){
                ?>
                        <!-- Data -->
                <div class="col-12 col-md-6 col-lg-6">
                    <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/<?= $g['id']; ?>.jpg" alt="">
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                            <h2><?= $g['nama']; ?></h2>
                            <h6><span><?= $g['kode']; ?></span></h6>
                            <h4>400$ <span>/ Day</span></h4>
                            <div class="room-feature">
                                <h6>Size: <span>30 ft</span></h6>
                                <h6>Capacity: <span>Max persion 5</span></h6>
                                <h6>Address: <span><?= $g['alamat']; ?></span></h6>
                            </div>
                            <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <?php 
                        }
                        ?>
            </div>
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                <a href="index.php?hal=gedung_form"  class="btn roberto-btn ">Tambah</a>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->
<?php 
}
else {
    include_once 'accessUser.php';
}?>