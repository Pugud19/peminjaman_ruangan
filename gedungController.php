<?php 
require_once 'koneksi_db.php';
require_once 'models/gedung.php';

    // 1. Tangkap request dari form
    $kode = $_POST['kode']; 
    $nama = $_POST['nama']; 
    $alt = $_POST['alamat'];
    // tombol
    $tombol = $_POST['proses'];
    // 2. memasukkan ke data array 
    $data = [
        $kode, // ? 1
        $nama, // ? 2
        $alt    // ? 3
    ]; 
    // 3. Ciptakan object dari class gedung 
    $obj = new Gedung();
    switch ($tombol) {
        case 'simpan': $obj->simpan($data);
            break;
        case 'ubah': 
            $data[] = $_POST['idx']; // ? ke 4 where id = ? 
            $obj->ubah($data);
            break;
        case 'hapus':
            unset($data); 
            $data[] = $_POST['idx']; // ? ke 4 where id ?
            $obj->hapus($data);
            break;
        default: 
        header('location:index.php?hal=gedung');
         break;
    }
    // 4. Landing page 
    header('location:index.php?hal=gedung');
?>