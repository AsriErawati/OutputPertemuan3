<?php

$v1 = $_POST['namaku'];
$v2 = $_POST['nim'];

// ambil data file
$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "Upload/";

// pindahkan file
$Upload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($Upload) {
	echo "Hallo ".$v1. " dengan NIM ".$v2;
    echo "<br>Anda telah berhasil upload!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}
?>