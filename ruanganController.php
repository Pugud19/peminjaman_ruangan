<?php 
require_once 'koneksi_db.php';
require_once 'models/ruangan.php';

    // 1. Tangkap request dari form 
    $nama = $_POST['nama']; 
    $gedung = $_POST['gedung_id'];
    $lantai = $_POST['lantai'];
    $kategori = $_POST['kategori_ruangan_id'];
    $fasilitas = $_POST['fasilitas_id'];
    $status = $_POST['status'];
    $foto = $_POST['foto'];

    // tombol
    $tombol = $_POST['btn'];
    // 2. memasukkan ke data array 
    $data = [
        $nama, // ? 1
        $ket, // ? 2
    ]; 
    // 3. Ciptakan object dari class fasilitas 
    $obj = new Ruangan();
    switch ($tombol) {
        case 'simpan': $obj->simpan($data);
            break;
        case 'ubah': 
            $data[] = $_POST['idr']; // ? ke 2 where id = ? 
            $obj->ubah($data);
            break;
        case 'hapus': 
            unset($data); // hapus ? ke 2 where id = ?
            $data[] = $_POST['idr']; // ? ke 2 where id = ? 
            $obj->hapus($data);
            break;
        default: # code... 
         break;
    }
    // 4. Landing page 
    header('location:index.php?hal=ruangan');
?>