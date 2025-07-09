<?php
$koneksi = new mysqli('localhost', 'root', '', 'cbt_db');
if ($koneksi->connect_error) { die('Koneksi gagal: ' . $koneksi->connect_error); }
?>