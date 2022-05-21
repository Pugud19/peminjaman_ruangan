<?php 
if (isset($user)) {
?>
<section class="roberto-rooms-area">
        <div class="rooms-slides owl-carousel">
            <!-- Single Room Slide -->
            <?php 
                // ciptakan object dari class gedung
                $obj = new Ruangan();
                // panggil fungsi menampilkan data gedung
                $rn = $obj->ruangan();
                // looping data gedung 
                foreach($rn as $r){
                ?>
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(img/bg-img/<?= $r['id'] ?>.jpg);"></div>

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms"><?= $r['nama'] ?></h2>
                    <h3 data-animation="fadeInUp" data-delay="300ms"><span><?= $r['status'] ?></span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> Gedung</span> <span>: <?= $r['nama_gedung'] ?></span></li>
                        <li><span><i class="fa fa-check"></i> Lantai</span> <span>: <?= $r['lantai'] ?></span></li>
                        <li><span><i class="fa fa-check"></i> Fasilitas</span> <span>: <?= $r['nama_fasilitas'] ?></span></li>
                        <li><span><i class="fa fa-check"></i> Kategori</span> <span>: <?= $r['nama_kategori'] ?></span></li>
                    </ul>
                    <form action="ruanganController.php" method="post">
                        
                    <a href="index.php?hal=ruangan_detail&id=<?= $r['id'] ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                    <a href="index.php?hal=fasilitas_detail&id=<?= $r['id'] ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Fasilitas Details</a>
                    <?php 
                    if(isset($user)){
                        if ($role != 'staff' && $role != 'peminjam') {
                    ?>
                    <button class="btn mt-30 btn-danger fa fa-trash" type="submit" name="btn" value="hapus" onclick="confirm('Anda Yakin Ingin Menghapus?')"></button>
                        <input type="hidden" name="idr" value="<?= $r['id'] ?>">
                    <?php } } ?>
                    </form>

                </div>
            </div>

            <?php } ?>
        </div>
    </section>
<?php 
}else {
    include_once 'accessUser.php';
}
?>