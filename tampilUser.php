<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
</head>
<body>

<h2>Data Siswa</h2>

<a href="index.php">&laquo; Menu Utama</a> |
<a href="tambahUser.php">+ Tambah Siswa Baru</a>

<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>id_user</th>
        <th>email</th>
        <th>pass</th>
        <th>role</th>
        <th>nama</th>
        <th>kelas</th>
      <th>aksi</th>
    </tr>

<?php
$no = 1;
$query = mysqli_query($koneksi, "SELECT * FROM tb_user");

while ($data = mysqli_fetch_assoc($query)) {
?>

    <tr>
        <td><?php echo $no++; ?></td>

        <td><?php echo $data['email']; ?></td>

        <td><?php echo $data['pass']; ?></td>

        <td><?php echo $data['role']; ?></td>

        <td><?php echo $data['nama']; ?></td>

        <td><?php echo $data['kelas'] ?></td>

        <td>
            <a href="editUser.php?id=<?php echo $data['id_siswa']; ?>">
                Edit
            </a>
            |<a href="siswa_hapus.php?id=<?php echo $data['id_siswa']; ?>"
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