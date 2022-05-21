
<?php
$dbname = 'peminjaman_ruangan';
$dsn = 'mysql:dbname='.$dbname.';host=localhost';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Koneksi Suksess ke database $dbname ".$user;
} catch (PDOException $e) {
    echo 'Terjadi Kesalahan : ' . $e->getMessage();
}

?>
