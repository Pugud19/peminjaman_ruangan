<?php 
require_once 'models/kategoriRuangan.php';
// tangkap url request 
$id = $_REQUEST['id'];
$obj = new Kategori();
// panggil fungsi detail
$r = $obj->getKategori($id);

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
                        <h2>Form Edit <?= $r['nama'] ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <div class="roberto-contact-form">
                        <form action="kategoriRuanganController.php" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                                    <input type="text" name="nama" class="form-control mb-30" value="<?= $r['nama'] ?>">
                                </div>
                                <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                                    <textarea name="keterangan" class="form-control mb-30" ><?= $r['keterangan'] ?></textarea>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                                    <button type="submit" name="btn" value="ubah" class="btn roberto-btn mt-15">Simpan</button>
                                    <input type="hidden" name="idk" class="form-control mb-30" value="<?= $r['id'] ?>">
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