<?php 

session_start();

include("../koneksi.php");

if(isset($_POST['simpan'])){

    $berat= $_POST['berat'];
    $tujuan = $_POST['tujuan'];
    $biaya = $_POST['biaya'];

    $sql = "INSERT INTO paket
    (berat, tujuan, biaya)
    VALUES ('$berat', '$tujuan', '$biaya')";

    $query = mysqli_query($db, $sql);

    if ($query){
        $_SESSION['notifikasi'] = "Data paket berhasi di tambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data paket gagal di tambahkan!";
    }

    header('Location: index.php');
} else {

    die("Akses ditolak...");
}
?>