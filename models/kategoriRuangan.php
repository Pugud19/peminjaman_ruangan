<?php
class Kategori{
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
    public function kategoriRuangan(){
        $sql = "SELECT * FROM kategori_ruangan";
        // prepare statement PDO
        $kr = $this->koneksi->prepare($sql);
        $kr->execute();
        $r = $kr->fetchAll();
        return $r;
    }
        // Input Data To Database
        public function simpan($data){
            $sql = " INSERT INTO kategori_ruangan (nama, keterangan) VALUES (?,?)";
            // prepare statement PDO
            $r = $this->koneksi->prepare($sql);
            $r->execute($data);
            
        }
        public function getKategori($id){
        $sql = "SELECT * FROM kategori_ruangan WHERE id = ?";
            // prepare statement PDO
        $kr = $this->koneksi->prepare($sql);
        $kr->execute([$id]);
        $r = $kr->fetch();
        return $r;
        }
        public function ubah($data){
            $sql = "UPDATE kategori_ruangan SET nama=?, keterangan=?   WHERE id = ?";
            // prepare statement PDO
            $kr = $this->koneksi->prepare($sql);
            $kr->execute($data);
        }
        public function hapus($data){
            $sql = "DELETE FROM kategori_ruangan  WHERE id = ?";
            // prepare statement PDO
            $kr = $this->koneksi->prepare($sql);
            $kr->execute($data);
        }
}