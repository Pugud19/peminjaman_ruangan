<?php
class Gedung{
    // member1 var
    public $koneksi;
    // member2 konstruktor
    public function __construct()
    {
        // panggil instance objek PDO di koneksi_db.php
        global $dbh;
        $this->koneksi = $dbh;
    }
    // Read Data From Database
    public function getAll(){
        $sql = "SELECT * FROM gedung";
        // prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    // Input Data To Database
    public function simpan($data){
        $sql = " INSERT INTO gedung (kode, nama, alamat) VALUES (?,?,?)";
        // prepare statement PDO
        $fr = $this->koneksi->prepare($sql);
        $fr->execute($data);
        
    }
    public function getGedung($id){
        $sql = "SELECT * FROM gedung WHERE id = ?";
        // prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    // Edit data
    public function ubah($data){
        $sql = "UPDATE gedung SET kode=?, nama=?, alamat=?   WHERE id = ?";
        // prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    // Delete Data
    public function hapus($data){
        $sql = "DELETE FROM gedung  WHERE id = ?";
        // prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}