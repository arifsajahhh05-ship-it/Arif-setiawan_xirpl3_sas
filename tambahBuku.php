<?php
// Koneksi ke database
$koneksi = mysqli_connect("127.0.0.1", "root", "root", "db_perpustakaan");

// Proses simpan data saat tombol ditekan
if (isset($_POST['simpan'])) {
    $juduk= $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];

    $query = "INSERT INTO tb_buku (judul,penerbit,tahun_terbit,stok,deskripsi) VALUES ('$judul', '$penerbit', '$tahun_terbit', '$stok', '$deskripsi')";
    
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('User berhasil ditambahkan!');</script>";
    } else {
        echo "Gagal: " . mysqli_error($koneksi);
    }
}
?>

<!-- Form Tambah User -->
<form method="POST">
    <input type="judul" name="judul" placeholder="judul" maxlength="20" required><br><br>
    <input type="penerbit" name="penerbit" placeholder="Penerbit" maxlength="20" required><br><br>
    <input type="tahun_terbit" name="tahun_terbit" placeholder="tahun_terbit" maxlength="20" required><br><br>
    <input type="stok" name="stok" placeholder="stok" maxlength="20" required><br><br>
     <input type="deskripsi" name="deskripsi" placeholder="deskripsi" maxlength="20" required><br><br>
    <button type="submit" name="simpan">Simpan buku</button>
</form>
