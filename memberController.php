<?php 
session_start();
require_once 'koneksi_db.php';
require_once 'models/member.php';

    // 1. Tangkap request dari form
    $username = $_POST['username']; 
    $password = $_POST['password'];
    // 2. memasukkan ke data array 
    $data = [
        $username, // ? 1
        $password    // ? 2
    ]; 
    // 3. Ciptakan object dari class fasilitas 
    // 3. Ciptakan object dari class fasilitas 
    $obj = new Member();
    $mb = $obj->cekLogin($data);

    // logic login member
    if (!empty($mb)) {
        $_SESSION['member'] = $mb;
        header('location:index.php?hal=home');
    }else {       
        header('location:index.php?hal=gagal_login');
    }
?>