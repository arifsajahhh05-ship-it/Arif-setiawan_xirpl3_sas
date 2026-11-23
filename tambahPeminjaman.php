<?php
// Koneksi ke database
$koneksi = mysqli_connect("127.0.0.1", "root", "root", "db_perpustakaan");

// Proses simpan data saat tombol ditekan
if (isset($_POST['simpan'])) {
    $id_pinjam = $_POST['id_pinjam'];
    $id_user= $_POST['id_user'];
    $id_buku = $_POST['id_buku'];
    $tgl_pinjam  = $_POST['tgl_pinjam'];
    $tgl_kembali= $_POST['tgl_kembali'];
    $jml_pinjam = $_post['jml_pinjam'];

    $query = "INSERT INTO tb_bukur (id_pinjam,id_user,id_buku,tgl,tgl_pinjam,tgl_kembali,jml_pinjam) VALUES ('$id_pinjam', '$id_user', '$id_buku', '$tgl_pinjam', '$tgl_kembali','$jml_pinjam')";
    
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('User berhasil ditambahkan!');</script>";
    } else {
        echo "Gagal: " . mysqli_error($koneksi);
    }
}
?>

<!-- Form Tambah User -->
<form method="POST">
    <input type="id_pinjam" name="id_pinjam" placeholder="id_pinjam" maxlength="20" required><br><br>
    <input type="id_user" name="id_user" placeholder="id_user" maxlength="20" required><br><br>
    
    <input type="id_buku" name="id_buku" placeholder="id_buku" maxlength="20" required><br><br>
    <input type="tgl_pinjam" name="tgl_pinjam" placeholder="tgl_pinjam" maxlength="20" required><br><br>
        <input type="tgl_kembali" name="tgl_kembali" placeholder="tgl_kembali" maxlength="20" required><br><br>
      <input type="jml_pinjam" name="jml_pinjam" placeholder="jml_pinjam" maxlength="20" required><br><br>
    <button type="submit" name="simpan">Simpan User</button>
</form>
