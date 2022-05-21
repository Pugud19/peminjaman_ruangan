<?php 
require_once 'models/fasilitas.php';
// tangkap url request 
$id = $_REQUEST['id'];
$obj = new Fasilitas();
// panggil fungsi detail
$rn = $obj->getFasilitas($id);


if(isset($user)) {
    if($role != 'peminjam'){
?>
    <!-- Fasilitas Form Area Start -->
    <div class="roberto-contact-form-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Form Edit <?= $rn['nama'] ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <div class="roberto-contact-form">
                        <form action="fasilitasController.php" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                                    <input type="text" name="nama" class="form-control mb-30" value="<?= $rn['nama'] ?>">
                                </div>
                                <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                                    <textarea name="keterangan" class="form-control mb-30" ><?= $rn['keterangan'] ?></textarea>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                                    <button type="submit" name="tombol" value="edit" class="btn roberto-btn mt-15">Simpan</button>
                                    <input type="hidden" name="idf" class="form-control mb-30" value="<?= $rn['id'] ?>">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fasilitas Form Area End -->
    <?php 
    }
    else {
        include_once 'accessUser.php';
    }
    }
    else {
        include_once 'access.php';
    }

    ?>