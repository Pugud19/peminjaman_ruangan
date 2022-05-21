<?php 
require_once 'koneksi_db.php';
require_once 'models/fasilitas.php';

    // 1. Tangkap request dari form
    $nama = $_POST['nama']; 
    $ket = $_POST['keterangan'];
    // tombol
    $tombol = $_POST['tombol'];
    // 2. memasukkan ke data array 
    $data = [
        $nama, // ? 1
        $ket    // ? 2
    ]; 
    // 3. Ciptakan object dari class fasilitas 
    // 3. Ciptakan object dari class fasilitas 
    $obj = new Fasilitas();
    switch ($tombol) {
        case 'save': $obj->simpan($data);
            break;
        case 'edit': 
            $data[] = $_POST['idf']; // ? ke 3 where id = ? 
            $obj->edit($data);
            break;
        case 'hapus': 
            unset($data); // hapus ? ke 3 where id = ?
            $data[] = $_POST['idf']; // ? ke 3 where id = ? 
            $obj->hapus($data);
            break;
        default:
        // header('location:index.php?hal=fasilitas');
         break;
    }
    // 4. Landing page 
    header('location:index.php?hal=fasilitas');
?>