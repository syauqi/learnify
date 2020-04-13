<?php
include 'koneksi.php';
$kode_mapel = $_GET['kode_mapel'];
$query = mysqli_query($koneksi, "select * from mapel where kode_mapel='$kode_mapel'");
$mapel = mysqli_fetch_array($query);
$data = array(
    'nama_mapel' => $mapel['nama_mapel']);
echo json_encode($data);