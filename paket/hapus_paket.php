<?php
 session_start();
include("../koneksi.php");

if (isset($_GET['paket_id'])){
    $paket_id =$_GET['paket_id'];
    $sql = "DELETE FROM paket WHERE paket_id=$paket_id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data paket berhasil di hapus!";
    } else {
        $_SESSION['notifikasi'] = "Data paket gagal dihapus!";
    }

    header('Location: index.php');
} else {
    die("Akses ditolak...");
}
?>
