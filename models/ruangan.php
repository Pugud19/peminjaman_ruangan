<?php
class Ruangan{
    // member1 var
    public $koneksi;
    // member2 konstruktor
    public function __construct()
    {
        // panggil instance objek PDO di koneksi_db.php
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function ruangan(){
        $sql = "SELECT g.nama AS nama_gedung, f.nama AS nama_fasilitas, k.nama AS nama_kategori, r.nama, r.lantai, r.status, r.foto, r.id
        FROM ruangan r 
        INNER JOIN gedung g ON g.id = r.gedung_id
        INNER JOIN fasilitas f ON f.id = r.fasilitas_id 
        INNER JOIN kategori_ruangan k ON k.id = r.kategori_ruangan_id ";
        // prepare statement PDO
        $ra = $this->koneksi->prepare($sql);
        $ra->execute();
        $rn = $ra->fetchAll();
        return $rn;
    }
    public function getRuangan($id){
        $sql = "SELECT g.nama AS nama_gedung, f.nama AS nama_fasilitas, k.nama AS nama_kategori, r.nama, r.lantai, r.status, r.foto, r.id
        FROM ruangan r 
        INNER JOIN gedung g ON g.id = r.gedung_id
        INNER JOIN fasilitas f ON f.id = r.fasilitas_id 
        INNER JOIN kategori_ruangan k ON k.id = r.kategori_ruangan_id 
        WHERE r.id = ?";
        // prepare statement PDO
        $ra = $this->koneksi->prepare($sql);
        $ra->execute([$id]);
        $rn = $ra->fetch();
        return $rn;
    }
            // Input Data To Database
        public function simpan($data){
            $sql = " INSERT INTO ruangan (nama, gedung_id, lantai, kategori_ruangan_id, fasilitas_id, status, foto) VALUES (?,?,?,?,?,?,?)";
            // prepare statement PDO
            $r = $this->koneksi->prepare($sql);
            $r->execute($data);
            
        }
    public function getRuang($id){
        $sql = "SELECT * FROM ruangan WHERE id = ?";
            // prepare statement PDO
        $ra = $this->koneksi->prepare($sql);
        $ra->execute([$id]);
        $rn = $ra->fetch();
        return $rn;
        }
        public function ubah($data){
            $sql = "UPDATE kategori_ruangan SET nama = ?, gedung_id = ?, lantai = ?, kategori_ruangan_id = ?, fasilitas_id = ?, status = ?, foto = ?   WHERE id = ?";
            // prepare statement PDO
            $kr = $this->koneksi->prepare($sql);
            $kr->execute($data);
        }
    public function hapus($data){
        $sql = "DELETE FROM ruangan  WHERE id = ?";
        // prepare statement PDO
        $ra = $this->koneksi->prepare($sql);
        $ra->execute($data);
    }
}