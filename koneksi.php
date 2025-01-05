<?php
$koneksi = mysqli_connect("localhost", "root", "", "sig") or die("Koneksi ke database gagal!");
if (!$koneksi) {
    die("koneksi kedatabase gagal: " . mysqli_connect_error());
}
mysqli_set_charset($koneksi, "utf8");
?>