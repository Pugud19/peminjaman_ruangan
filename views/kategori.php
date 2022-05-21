<?php 
if (isset($user)) {
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
                $obj = new Kategori();
                // panggil fungsi menampilkan data gedung
                $r = $obj->kategoriRuangan();
                // looping data gedung 
                foreach($r as $kr){
                ?>
                        <!-- Data -->
                <div class="col-12 col-md-6 col-lg-6">
                    <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/<?= $kr['id'] ?>.jpg" alt="">
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                            <h2><?= $kr['nama']; ?></h2>
                            <h6><span><?= $kr['keterangan']; ?></span></h6>
                            <h4>400$ <span>/ Day</span></h4>
                            <div class="room-feature">
                                <h6>Size: <span>30 ft</span></h6>
                                <h6>Capacity: <span>Max person 2</span></h6>
                            </div>
                        
                        <form action="kategoriRuanganController.php" method="post">
                        <?php 
                        if(isset($user)){
                            if ($role != 'peminjam') {
                        ?>
                        <a href="index.php?hal=kategori_form_edit&id=<?= $kr['id'] ?>"  class="btn btn-warning "><i class="fa fa-edit"></i></a>
                        <?php 
                        if ($role != 'staff') {
                        ?>
                        <button class="btn btn-danger fa fa-trash" type="submit" name="btn" value="hapus" onclick="confirm('Anda Yakin Ingin Menghapus?')"></button>
                        <input type="hidden" name="idk" value="<?= $kr['id'] ?>">
                        <?php }}} ?>
                        </form>
                            <br>
                            <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <?php 
                        }
                        ?>
            </div>
            <?php 
                    if(isset($user)){
                        if ($role != 'staff' && $role != 'peminjam') {
                ?>
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                <a href="index.php?hal=kategori_form"  class="btn roberto-btn ">Tambah</a>
            </div>
            <?php }} ?>
        </div>
    </div>
    <!-- Rooms Area End -->
<?php 
}
else {
    include_once 'accessUser.php';
}
?>