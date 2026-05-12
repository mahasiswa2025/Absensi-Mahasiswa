# Sistem Absensi Mahasiswa Sederhana

Sistem ini adalah aplikasi web sederhana berbasis PHP untuk mencatat kehadiran mahasiswa. Aplikasi ini menggunakan formulir HTML dengan metode `POST` untuk menangkap nama mahasiswa, NIM, dan status kehadiran (Hadir, Izin, Sakit, Tidak Hadir). 

## Fitur

*   **Formulir Input:** Memungkinkan pengguna untuk memasukkan nama, NIM, dan memilih status kehadiran dari dropdown.
*   **Pemrosesan Data (PHP):** Data yang dikirim melalui form diproses menggunakan PHP dan ditampilkan kembali ke pengguna.
*   **Logika Percabangan (If-Else):** Menampilkan pesan khusus berdasarkan status kehadiran yang dipilih:
    *   `Hadir`: "Anda hadir hari ini"
    *   `Izin`: "Anda Izin"
    *   `Sakit`: "Semoga cepat sembuh"
    *   `Tidak Hadir`: "Anda tidak hadir hari ini"
*   **Desain Responsif:** Tampilan form diperindah menggunakan CSS (`style.css`) agar terlihat bersih dan menarik.

## Struktur File

*   `index.php`: Berisi struktur HTML untuk formulir, serta logika PHP untuk memproses dan menampilkan hasil absensi.
*   `style.css`: Berisi gaya (CSS) untuk mendesain tampilan form dan hasil absensi.

## Prasyarat

*   Web server lokal seperti XAMPP, WAMP, atau MAMP yang mendukung PHP.

## Cara Penggunaan

1.  Pastikan web server lokal (misalnya Apache di XAMPP) sudah berjalan.
2.  Letakkan folder proyek ini di dalam direktori root server (misalnya `htdocs` untuk XAMPP).
3.  Buka browser web dan akses `http://localhost/absensi` 
4.  Masukkan nama mahasiswa, NIM, dan pilih status kehadiran.
5.  Klik tombol **Simpan**.
6.  Hasil absensi beserta pesan khusus akan ditampilkan di bawah formulir.

## Bahasa pemrograman yang Digunakan

*   HTML
*   CSS
*   PHP

* Tugas Kelompok
ketua : Yudha(202212056)
anggota : Jamil(202212070)
