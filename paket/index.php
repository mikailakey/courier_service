<?php 
include("../koneksi.php");

session_start();


?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Paket</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Data Paket</h2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>

        <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; ?>
        <table>
            <thead>
                <tr align="center">
                    <th>#</th>
                    <th>Berat</th>
                    <th>Tujuan</th>
                    <th>Biaya</th>
                    <th><a href="tambah_paket.php">Tambah Data</th>
    </tr>
    </thead>
    </tbody>

    <?php 
    $no =1;
    $query = $db->query("SELECT * FROM paket");
    while ($courier_service = $query->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $courier_service ['berat'] ?></td>
            <td><?php echo $courier_service ['tujuan'] ?></td>
            <td><?php echo $courier_service ['biaya']?></td>
            <td align="center">

            <a href="edit_paket.php? paket_id=<?php echo $courier_service['paket_id'] ?>">Edit</a>
            <a onclick="return confirm('Anda yakin ingin menghapus data ini?')"
            href= "hapus_paket.php? paket_id=<?php echo $courier_service['paket_id'] ?>">Hapus</a>
    </td>
    </tr>
    <?php
    } 
    ?> 
    </tbody>
</table>
<p>Total: <?php echo mysqli_num_rows($query) ?></p>
       

    

</body>
</html>