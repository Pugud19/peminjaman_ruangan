<?php 
include_once 'models/fasilitas.php';
// tangkap url request 
$id = $_REQUEST['id'];
$obj = new Fasilitas();
// panggil fungsi detail
$data = $obj->getFasilitas($id);

if (isset($user)) {
    
?>       
       <div class="container mt-100">
       <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h6>Fasilitas Detail</h6>
                        <h2>Detail Fasilitas yang didapat</h2>
                    </div>
       <div class="room-features-area d-flex justify-content-center flex-wrap mb-50">
                <h6>Fasilitas yang didapat: <span><?= $data['nama'] ?></span></h6>
                <h6>Capacity: <span>Max 5 person </span></h6>
                <h6>Status: <span><?= $data['keterangan'] ?></span></h6>
            </div>
       </div>
       <?php 
    }
    else {
        include_once 'accessUser.php';
    }

    ?>