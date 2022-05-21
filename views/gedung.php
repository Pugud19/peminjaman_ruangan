<?php 
if (isset($user)) {
?>
<!-- Blog Area Start -->
    <section class="roberto-blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h6>Gedung</h6>
                        <h2>Daftar Gedung Yang Tersedia</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Data Gedung Area -->
                <?php 
                // ciptakan object dari class gedung
                $obj = new Gedung();
                // panggil fungsi menampilkan data gedung
                $rs = $obj->getAll();
                // looping data gedung 
                foreach($rs as $g){
                ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-50 wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" class="post-thumbnail"><img src="img/bg-img/<?= $g['id'] ?>.jpg" alt=""></a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-date">Jan 02, 2019</a>
                            <a href="#" class="post-catagory"><?= $g['kode'] ?></a>
                        </div>
                        <!-- Post Title -->
                        <a href="#" class="post-title"><?= $g['nama'] ?></a>
                        <p><?= $g['alamat'] ?></p>
                        <form action="gedungController.php" method="post">
                        <?php 
                        if(isset($user)){
                            if ($role != 'peminjam') {
                        ?>   
                        <a href="index.php?hal=gedung_form_edit&id=<?= $g['id'] ?>"  class="btn btn-warning "><i class="fa fa-edit"></i></a>
                        <?php 
                        if ($role != 'staff') {
                        ?>
                        <button class="btn btn-danger fa fa-trash" type="submit" name="proses" value="hapus" onclick="confirm('Anda Yakin Ingin Menghapus?')"></button>
                                <input type="hidden" name="idx" value="<?= $g['id'] ?>">
                        <?php }}} ?>
                        </form> 

                        <br>
                        <a href="#" class="btn continue-btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <?php
                }
                ?>

            </div>
            <?php 
                    if(isset($user)){
                        if ($role != 'peminjam') {
            ?>
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                <a href="index.php?hal=gedung_form"  class="btn roberto-btn ">Tambah</a>
            </div>
            <?php }} ?>
        </div>
    </section>
    <?php 
    }else {
        include_once 'accessUser.php';
    }
    ?>