<?php
// Koneksi ke database
$koneksi = mysqli_connect("127.0.0.1", "root", "root", "db_perpustakaan");

// Proses simpan data saat tombol ditekan
if (isset($_POST['simpan'])) {
    $email = $_POST['email'];
    $pass  = $_POST['pass'];
    $role  = $_POST['role'];
    $nama  = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $query = "INSERT INTO tb_user (email, pass, role, nama, kelas) VALUES ('$email', '$pass', '$role', '$nama', '$kelas')";
    
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('User berhasil ditambahkan!');</script>";
    } else {
        echo "Gagal: " . mysqli_error($koneksi);
    }
}
?>

<!-- Form Tambah User -->
<form method="POST">
    <input type="email" name="email" placeholder="Email" maxlength="20" required><br><br>
    <input type="password" name="pass" placeholder="Password" maxlength="20" required><br><br>
    
    <select name="role" required>
        <option value="">-- Pilih Role --</option>
        <option value="admin">Admin</option>
        <option value="anggota">Anggota</option>
    </select><br><br>
    
    <input type="text" name="nama" placeholder="Nama Lengkap" maxlength="20" required><br><br>
    <input type="text" name="kelas" placeholder="Kelas" maxlength="20" required><br><br>
    
    <button type="submit" name="simpan">Simpan User</button>
</form>
