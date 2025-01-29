Tentu! Berikut adalah versi README yang telah diperbarui untuk mencakup instruksi instalasi menggunakan fork:

# Sistem Informasi Geografi dengan Algoritma A-Star

## Deskripsi
Repositori ini berisi implementasi Sistem Informasi Geografi (SIG) yang menggunakan algoritma A-Star untuk perhitungan rute terpendek. Proyek ini dibangun menggunakan bahasa pemrograman PHP dan menggunakan MySQL sebagai basis data untuk menyimpan informasi geografis.

## Fitur
- **Perhitungan Rute Terpendek**: Menggunakan algoritma A-Star untuk menentukan rute terpendek antara dua titik.
- **Antarmuka Pengguna**: Antarmuka web yang ramah pengguna untuk memasukkan titik awal dan tujuan.
- **Integrasi Database**: Menggunakan MySQL untuk menyimpan data geografis dan informasi rute.
- **Visualisasi Peta**: Menampilkan rute yang dihitung pada peta.

## Teknologi yang Digunakan
- **Bahasa Pemrograman**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript
- **Peta**: [Leaflet.js](https://leafletjs.com/) atau [Google Maps API](https://developers.google.com/maps)

## Instalasi
1. **Fork Repositori**
   - Klik tombol "Fork" di sudut kanan atas halaman repositori ini untuk membuat salinan repositori ke akun GitHub Anda.

2. **Clone Repositori Fork**
   ```bash
   git clone https://github.com/username/repo-name.git
   cd repo-name
   ```

3. **Impor Database**
   - Buat database baru di MySQL.
   - Gunakan file `sig.sql` yang terdapat dalam repositori ini untuk mengimpor struktur tabel dan data yang diperlukan.
   - Anda dapat menggunakan phpMyAdmin atau perintah MySQL untuk mengimpor file:
   ```bash
   mysql -u username -p nama_database < database.sql
   ```

4. **Konfigurasi Koneksi Database**
   - Edit file `koneksi.php` untuk mengatur koneksi ke database MySQL.
   ```php
   <?php
   $koneksi = mysqli_connect("localhost", "root", "", "sig") or die("Koneksi ke database gagal!");
    if (!$koneksi) {
        die("koneksi kedatabase gagal: " . mysqli_connect_error());
    }
    mysqli_set_charset($koneksi, "utf8");

   ```

5. **Jalankan Server**
   - Anda dapat menggunakan server lokal seperti XAMPP atau MAMP untuk menjalankan aplikasi ini.
   - Akses aplikasi melalui browser di `http://localhost/repo-name`.

## Kontribusi
Kontribusi sangat diterima! Silakan buat issue atau pull request jika Anda memiliki saran atau perbaikan.

## Lisensi
Proyek ini dilisensikan di bawah [MIT License](LICENSE).

## Kontak
Jika Anda memiliki pertanyaan atau saran, silakan hubungi saya di ameliaakhila29@gmail.com.

---

Terima kasih telah mengunjungi repositori ini! Semoga proyek ini bermanfaat bagi Anda.
