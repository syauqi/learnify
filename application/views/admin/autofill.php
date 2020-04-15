<!--
@Project: Learnify
@Author/Programmer: Syauqi Zaidan Khairan Khalaf
@URL: syauqi.js.org
Author E-mail: Zaidanline67@Gmail.com

@About-Learnify :
Web Edukasi Open Source yang
dibuat oleh Syauqi Zaidan Khairan Khalaf.
Learnify adalah Web edukasi yang dilengkapi video, materi, dan soal ( Coming soon )
yang didesign semenarik dan sesimple mungkin. Learnify dibuat ditujukan agar para siswa
dan guru dapat terus belajar dan mengajar dimana saja dan kapan saja.
-->

<?php
include 'koneksi.php';
$nama_guru = $_GET['nama_guru'];
$query = mysqli_query($koneksi, "select nama_mapel from guru where nama_guru='$nama_guru'");
$mapel = mysqli_fetch_array($query);
$data = array(
    'nama_mapel' => $mapel['nama_mapel']);
echo json_encode($data);