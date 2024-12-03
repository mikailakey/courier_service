<?php  
include("../koneksi.php");

$paket_id = $_GET['paket_id'];

$query = $db->query("SELECT * FROM paket WHERE paket_id = '$paket_id'");
$courier_service = $query->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Paket</title>
</head>
<body>
    <h3>Edit Data Paket</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="paket_id" value="<?php echo $courier_service['paket_id']; ?>">
        <table border ="0">
            <tr>
                <td>Berat Paket</td>
                <td>
                    <input type="text" name="berat"
                    value="<?php echo $courier_service['berat']; ?>" required>
</td>
</tr>
<tr>
    <td>Tujuan</td>
    <td>
        <input type="text" name="tujuan"
        value="<?php echo $courier_service['tujuan']; ?>" required>
</td>
</tr>
<tr>
    <td>Biaya</td>
    <td>
    <input type="text" name="biaya"
    value="<?php echo $courier_service['biaya']; ?>" required>  
</td>
</tr>
</table>
<button type="submit" name="simpan">Simpan</button>
</form>
</body>
</html>