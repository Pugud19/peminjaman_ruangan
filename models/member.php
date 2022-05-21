<?php
class Member{
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
        public function getMember(){
            $sql = "SELECT * FROM member";
            // prepare statement PDO
            $mr = $this->koneksi->prepare($sql);
            $mr->execute();
            $mb = $mr->fetchAll();
            return $mb;
        }
    // Read Data From Database for Login
    public function cekLogin($data){
        $sql = "SELECT * FROM member WHERE username = ? AND password = SHA1(MD5(?))";
        // prepare statement PDO
        $mr = $this->koneksi->prepare($sql);
        $mr->execute($data);
        $mb = $mr->fetch();
        return $mb;
        
    }
}