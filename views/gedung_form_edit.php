<?php 
require_once 'models/gedung.php';
// tangkap url request 
$id = $_REQUEST['id'];
$obj = new Gedung();
// panggil fungsi detail
$data = $obj->getGedung($id);

// logic for RBAC
if (isset($user)) {
?>
    <!-- Fasilitas Form Area Start -->
    <div class="roberto-contact-form-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Form Edit <?= $data['nama'] ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <div class="roberto-contact-form">
                        <form action="gedungController.php" method="post">
                            <div class="row">
                            <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    <input type="text" name="kode" class="form-control mb-30" value="<?= $data['kode'] ?>">
                                </div>
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    <input type="text" name="nama" class="form-control mb-30" value="<?= $data['nama'] ?>">
                                </div>
                                <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                                    <textarea name="alamat" class="form-control mb-30" ><?= $data['alamat'] ?></textarea>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                                    <button type="submit" name="proses" value="ubah" class="btn roberto-btn mt-15">Simpan</button>
                                    <input type="hidden" name="idx" class="form-control mb-30" value="<?= $data['id'] ?>">
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
    }else {
        include_once 'accessUser.php';
    }
    ?>