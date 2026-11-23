<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Peminjaman Buku</title>
</head>

<body>

<h2>Data Peminjaman Buku</h2>

<a href="index.php">&laquo; Menu Utama</a> |
<a href="tambahPeminjaman.php">+ Tambah Peminjaman Baru</a>

<br><br>

<table border="1" cellpadding="8" cellspacing="0">

    <tr>
        <th>id pinjam</th>
        <th>id user</th>
        <th>id buku</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>jumlah pinjam</th>
         <th>aksi</th>
        
    </tr>

<?php
$no = 1;

$query = mysqli_query(
    $koneksi,
    "SELECT
        tb_peminjaman.*,
        
        
     FROM tb_peminjaman
     JOIN tb,user
        ON tb_peminjaman.id_user = user.id_user
     JOIN buku
        ON tb_peminjaman.id_buku = buku.id_buku
     ORDER BY tb_peminjaman.id_peminjaman DESC"
);

if (!$query) {
    die("Query error: " . mysqli_error($koneksi));
}

while ($data = mysqli_fetch_assoc($query)) {
?>

    <tr>

        <td><?php echo $no++; ?></td>

        <td><?php echo $data['id_pinjam']; ?></td>

        <td><?php echo $data['id_user']; ?></td>

         <td><?php echo $data['id_buku']; ?></td>

        <td><?php echo $data['tanggal_pinjam']; ?></td>

        <td><?php echo $data['tanggal_kembali']; ?></td>

        <td><?php echo $data['jml_pinjam']; ?></td>

        <td>
            <a href="editPeminjaman.php?id=<?php echo $data['id_peminjaman']; ?>">
                Edit
            </a>
            |
            <a href="hapusPeminjaman.php?id=<?php echo $data['id_peminjaman']; ?>"
               onclick="return confirm('Yakin ingin menghapus data peminjaman ini?')">
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