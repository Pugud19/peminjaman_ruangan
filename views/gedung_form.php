<?php 
if (isset($user)) {
?>
    <!-- Fasilitas Form Area Start -->
    <div class="roberto-contact-form-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Tambah Gedung</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <div class="roberto-contact-form">
                        <form action="gedungController.php" method="post">
                            <div class="row">
                            <div class="col-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                                    <input type="text" name="kode" class="form-control mb-30" placeholder="Kode Gedung">
                                </div>
                                <div class="col-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                                    <input type="text" name="nama" class="form-control mb-30" placeholder="Nama Gedung">
                                </div>
                                <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                                    <textarea name="alamat" class="form-control mb-30" placeholder="Alamat Gedung "></textarea>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                                    <button type="submit" name="proses" value="simpan" class="btn roberto-btn mt-15">Simpan</button>
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