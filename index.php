<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Absensi Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Absensi Mahasiswa</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama mahasiswa" required>
            </div>
            <div class="form-group">
                <label for="status">Status Kehadiran</label>
                <select id="status" name="status" required>
                    <option value="" disabled selected>Pilih Status</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Izin">Izin</option>
                    <option value="Sakit">Sakit</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                </select>
            </div>
            <button type="submit" name="submit">Simpan</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $nama = htmlspecialchars($_POST['nama']);
            $status = htmlspecialchars($_POST['status']);

            echo "<div class='result-section'>";
            echo "<h3>Hasil Absensi</h3>";
            echo "<p>Nama Mahasiswa : <strong>$nama</strong></p>";
            echo "<p>Status Kehadiran : <strong>$status</strong></p>";

            // Percabangan if-else
            $pesan = "";
            if ($status == "Hadir") {
                $pesan = "Anda hadir hari ini";
            } elseif ($status == "Izin") {
                $pesan = "Anda Izin";
            } elseif ($status == "Sakit") {
                $pesan = "Semoga cepat sembuh";
            } elseif ($status == "Tidak Hadir") {
                $pesan = "Anda tidak hadir hari ini";
            }

            echo "<p class='pesan'>$pesan</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
