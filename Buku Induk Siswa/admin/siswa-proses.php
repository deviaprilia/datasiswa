<?php
if (isset($_POST['tambah'])){
    include('koneksi.php');
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $jenis_kelamin =$_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_POST['agama'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $jarak_rumah = $_POST['jarak_rumah'];
    $input = mysql_query("INSERT INTO siswa VALUES(NULL,'$nisn','$nama','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$agama','$no_hp','$alamat','$jarak_rumah')") or die (mysql_error());
    if($input){
        header('location:index-guru.php');
    }
    else{
        echo 'Gagal menambahkan data!';
        echo '<a href="tambah-siswa.php">Kembali</a>';
    }
}
else{
    echo '<script>window.history.back()</script>';
}
?>