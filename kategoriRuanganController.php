<?php 
require_once 'koneksi_db.php';
require_once 'models/kategoriRuangan.php';

    // 1. Tangkap request dari form 
    $nama = $_POST['nama']; 
    $ket = $_POST['keterangan'];
    // tombol
    $tombol = $_POST['btn'];
    // 2. memasukkan ke data array 
    $data = [
        $nama, // ? 1
        $ket, // ? 2
    ]; 
    // 3. Ciptakan object dari class fasilitas 
    $obj = new Kategori();
    switch ($tombol) {
        case 'simpan': $obj->simpan($data);
            break;
        case 'ubah': 
            $data[] = $_POST['idk']; // ? ke 2 where id = ? 
            $obj->ubah($data);
            break;
        case 'hapus': 
            unset($data); // hapus ? ke 2 where id = ?
            $data[] = $_POST['idk']; // ? ke 2 where id = ? 
            $obj->hapus($data);
            break;
        default: # code... 
         break;
    }
    // 4. Landing page 
    header('location:index.php?hal=kategori');
?>