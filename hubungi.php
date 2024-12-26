<?php
// Periksa apakah form telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    // Tampilkan pesan konfirmasi
    echo "<h1>Pesan Anda Telah Dikirim</h1>";
    echo "<p><strong>Nama:</strong> $nama</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Pesan:</strong> $pesan</p>";

    // Simpan data ke file atau database (opsional)
    $log = "Nama: $nama\nEmail: $email\nPesan: $pesan\n\n";
    file_put_contents("pesan_log.txt", $log, FILE_APPEND);

    // Redirect kembali ke halaman utama setelah beberapa detik
    echo '<p><a href="../index.html">Kembali ke Halaman Utama</a></p>';
} else {
    // Jika halaman diakses langsung tanpa form
    echo "<h1>Akses Ditolak</h1>";
    echo "<p>Silakan kirim pesan melalui formulir yang tersedia.</p>";
}
?>
