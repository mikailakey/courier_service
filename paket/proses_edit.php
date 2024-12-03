<?php

session_start(); 
include("../koneksi.php");

if(isset($_POST['simpan'])){
    $paket_id = $_POST['paket_id'];
    $berat = $_POST['berat'];
    $tujuan = $_POST['tujuan'];
    $biaya = $_POST['biaya'];

    $sql = "UPDATE paket SET
    berat= '$berat',
    tujuan= '$tujuan',
    biaya= '$biaya'
    WHERE paket_id=$paket_id";

    $query = mysqli_query($db, $sql);

    if ($query){
        $_SESSION['notifikasi'] = "Data paket berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data paket gagal diperbarui!";
    }

    header('Location: index.php');
} else {
    die("Akses ditolak...");
}
?>
    


