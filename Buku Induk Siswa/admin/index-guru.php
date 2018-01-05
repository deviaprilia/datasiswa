<html>

<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" href="bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <script src="bootstrap/3.1.1/jquery.min.js"></script>
    <script src="bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="jumbotron" style="border-radius:0px;background-color:#5cb2e8;font-color:white;">
        <li class="active" style="border-radius:0;list-style-type:none;margin-left:1360px;margin-top:-10px;"><a href="../logout.php">Logout?</p></a></li>
        <h2 style="color:white; margin-left:60px;" data-animation="animated bounceInDown">Buku Induk | Siswa</h2>
        <h5 style="color:white;margin-left:60px;" data-animation="animated bounceInUp">SMK NEGERI 1 PURWOSARI</h5>
    </div>

        <div class="jumbotron" style="border-radius:0px;background-color:#eeebeb;margin-top:-30px;height:80%;font-color:white;">
            <ul class="nav nav-pills nav-justified" style="margin-top:-50px;">
                <li class="active" style="border-radius:0;"><a href="index-guru.php">Beranda</a></li>
                <li class="active" style="border-radius:0;"><a href="tambah-siswa.php">Tambah Data</a></li>
            </ul>
            <h3 style="margin-top:30px;margin-left:80px;">Data Siswa</h3>
            <table class="table table-bordered" cellpadding="5" cellspacing="0" style="font-size:14px;width:90%;margin-left:80px"  border="1">
                <tr bgcolor="#CCCCCC">
                    <th>No.</th>
                    <th>NISN</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Nomor Telepon</th>
                    <th>alamat</th>
                    <th>Jarak Rumah</th>
                    <th>Opsi</th>
                </tr>
                <?php
session_start();
include('koneksi.php');
$query = mysql_query("SELECT * FROM siswa ORDER BY siswa_id") or die (mysql_error());
if(mysql_num_rows($query) == 0){
    echo '<tr><td colspan="11">Tidak ada data!</td></tr>';
}
else{
    $no = 1;
    while($data = mysql_fetch_array($query))
    {
        echo '<tr>';
        echo '<td>'.$no.'</td>';
        echo '<td>'.$data['nisn'].'</td>';
        echo '<td>'.$data['nama'].'</td>';
        echo '<td>'.$data['jenis_kelamin'].'</td>';
        echo '<td>'.$data['tempat_lahir'].'</td>';
        echo '<td>'.$data['tanggal_lahir'].'</td>';
        echo '<td>'.$data['agama'].'</td>';
        echo '<td>'.$data['no_hp'].'</td>';
        echo '<td>'.$data['alamat'].'</td>';
        echo '<td>'.$data['jarak_rumah'].'</td>';
        echo '<td><a href="edit-siswa.php?id='.$data['siswa_id'].'" type="button"  class="btn btn-warning">Edit</a> <a href="hapus-siswa.php?id='.$data['siswa_id'].'" type="button" class="btn btn-danger" onclick="return confirm(\'yakin?\')">Hapus</a></td>';
        echo '</tr>';
        $no++;
    }
}
?>
            </table>
        </div>
    </div>
</body>

</html>