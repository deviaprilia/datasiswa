<?php
if(isset($_POST['simpan'])){
    include('koneksi.php');
    $id = $_POST['id'];
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $jenis_kelamin =$_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_POST['agama'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $jarak_rumah = $_POST['jarak_rumah'];
    $update = mysql_query("UPDATE siswa SET nisn='$nisn',nama='$nama',jenis_kelamin='$jenis_kelamin',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',agama='$agama',no_hp='$no_hp',alamat='$alamat',jarak_rumah='$jarak_rumah'WHERE siswa_id='$id'") or die (mysql_error());
    if($update){
        header('location:index-guru.php');
    }
    else{
        echo 'Gagal menyimpan data!';
        echo '<a href="index-siswa.php?id='.$id.'">Kembali</a>';
    }
}
else{
    echo '<script>window.history.back()</script>';
}
?>