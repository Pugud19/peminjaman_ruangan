<?php
class Fasilitas{
    // member1 var
    private $koneksi;
    // member2 konstruktor
    public function __construct()
    {
        // panggil instance objek PDO di koneksi_db.php
        global $dbh;
        $this->koneksi = $dbh;
    }
    // Read Data From Database
    public function dataFasilitas(){
        $sql = "SELECT * FROM fasilitas";
        // prepare statement PDO
        $fr = $this->koneksi->prepare($sql);
        $fr->execute();
        $fs = $fr->fetchAll();
        return $fs;
    }
    // Input Data To Database
    public function simpan($data){
        $sql = " INSERT INTO fasilitas (nama, keterangan) VALUES (?,?)";
        // prepare statement PDO
        $fr = $this->koneksi->prepare($sql);
        $fr->execute($data);
        
    }
    // Detail data for fasilitas
    public function getFasilitas($id){
        $sql = "SELECT * FROM fasilitas WHERE id = ?";
        // prepare statement PDO
        $ra = $this->koneksi->prepare($sql);
        $ra->execute([$id]);
        $rn = $ra->fetch();
        return $rn;
    }
    // Update Data
    public function edit($data){
        $sql = "UPDATE fasilitas SET  nama=?, keterangan=?   WHERE id = ?";
        // prepare statement PDO
        $ra = $this->koneksi->prepare($sql);
        $ra->execute($data);
    }
    // Delete Data
    public function hapus($data){
        $sql = "DELETE FROM fasilitas  WHERE id = ?";
        // prepare statement PDO
        $ra = $this->koneksi->prepare($sql);
        $ra->execute($data);
    }
}