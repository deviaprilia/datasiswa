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
        <div class="jumbotron" style="border-radius:0px;background-color:#eeebeb;margin-top:-30px;height:90%;font-color:white;">
        <ul class="nav nav-pills nav-justified" style="margin-top:-50px;">
                <li class="active" style="border-radius:0;"><a href="index-guru.php">Beranda</a></li>
                <li class="active" style="border-radius:0;"><a href="tambah-siswa.php">Tambah Data</a></li>
            </ul>
            <form action="siswa-proses.php" method="post">
                <h3 style="text-align:center;font-weight:bold;">Tambah Data</h3>
                <input name="nisn" type="text" class="col-md-6 norightborder"style="width:500px;height:40px;margin-left:500px;margin-top:20px;" placeholder="NISN *" required>
                <input name="nama" type="text" class="col-md-6 norightborder"style="width:500px;height:40px;margin-left:500px;margin-top:10px;" placeholder="Nama Lengkap *" required>
                <input name="jenis_kelamin" type="text" class="col-md-6 norightborder"style="width:500px;height:40px;margin-left:500px;margin-top:10px;" placeholder="Jenis Kelamin *" required>
                <input name="tempat_lahir" type="text" class="col-md-6 norightborder"style="width:500px;height:40px;margin-left:500px;margin-top:10px;" placeholder="Tempat Lahir *" required>
                <input name="tanggal_lahir" type="text" class="col-md-6 norightborder"style="width:500px;height:40px;margin-left:500px;margin-top:10px;" placeholder="Tanggal Lahir *" required>
                <input name="agama" type="text" class="col-md-6 norightborder"style="width:500px;height:40px;margin-left:500px;margin-top:10px;" placeholder="Agama *" required>
                <input name="no_hp" type="text" class="col-md-6 norightborder"style="width:500px;height:40px;margin-left:500px;margin-top:10px;" placeholder="Nomor Telepon *" required>
                <input name="alamat" type="text" class="col-md-6 norightborder"style="width:500px;height:40px;margin-left:500px;margin-top:10px;" placeholder="Alamat *" required>
                <input name="jarak_rumah" type="text" class="col-md-6 norightborder"style="width:500px;height:40px;margin-left:500px;margin-top:10px;" placeholder="Jarak Rumah *" required>
            
               
                    <tr>
                        <td>&nbsp;</td>
                        <td></td>
                        <td><input type="submit" name="tambah" value="Tambah" type="button" class="btn btn-info" style="margin-left:500px;margin-top:10px;"></td>
                    </tr>
            </form>
          
</body>

</html>