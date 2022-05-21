
    <!-- Fasilitas Form Area Start -->
    <?php 
    if(isset($user)) {
        if($role != 'peminjam'){
    ?>
    <div class="roberto-contact-form-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Tambah Fasilitas</h2>
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
                                    <input type="text" name="nama" class="form-control mb-30" placeholder="Nama Fasilitas">
                                </div>
                                <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                                    <textarea name="keterangan" class="form-control mb-30" placeholder="Keterangan Fasilitas"></textarea>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                                    <button type="submit" name="tombol" value="save" class="btn roberto-btn mt-15">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <!-- Fasilitas Form Area End -->