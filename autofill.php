<?php
include 'koneksi.php';
$nama_guru = $_GET['nama_guru'];
$query = mysqli_query($koneksi, "select nama_mapel from guru where nama_guru='$nama_guru'");
$mapel = mysqli_fetch_array($query);
$data = array(
    'nama_mapel' => $mapel['nama_mapel']);
echo json_encode($data);