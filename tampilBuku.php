<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
</head>
<body>

<h2>Data Buku</h2>

<a href="index.php">&laquo; Menu Utama</a> |
<a href="tambahBuku.php">+ Tambah Buku Baru</a>

<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>id_buku</th>
        <th>judul</th>
        <th>penerbit</th>
        <th>tahun terbit</th>
        <th>Stok</th>
        <th>deskripsi</th>
        <th>aksi</th>
    </tr>

<?php
$no = 1;

$query = mysqli_query($koneksi, "SELECT * FROM tb_buku");

while ($data = mysqli_fetch_assoc($query)) {
?>

    <tr>
        <td><?php echo $no++; ?></td>

        <td><?php echo $data['judul']; ?></td>

        <td><?php echo $data['penerbit']; ?></td>

        <td><?php echo $data['tahun_terbit']; ?></td>

        <td><?php echo $data['stok']; ?></td>
      
        <td><?php echo $data['deskripsi']; ?></td>
        <td>
            <a href="buku_edit.php?id=<?php echo $data['id_buku']; ?>">
                Edit
            </a>
            |
            <a href="buku_hapus.php?id=<?php echo $data['id_buku']; ?>"
               onclick="return confirm('Yakin ingin menghapus data ini?')">
                Hapus
            </a>
        </td>
    </tr>

<?php
}
?>

</table>

</body>
</html>