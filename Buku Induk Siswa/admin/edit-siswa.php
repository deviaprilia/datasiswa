<html>

<head>
    <title>Edit Siswa</title>
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
        <h3 style="text-align:center;font-weight:bold;">Edit data</h3>
        <?php
    include('koneksi.php');
    $id = $_GET['id'];
    $show = mysql_query("SELECT * FROM siswa WHERE siswa_id='$id'");
    if(mysql_num_rows($show) == 0){
        echo '<script>window.history.back()</script>';
    }
    else{
        $data = mysql_fetch_array($show);
    }
    ?>
            <form action="edit-siswa-proses.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <table cellpadding="3" cellspacing="0" style="margin-left:400px;margin-top:40px;">
                    <tr>
                        <td>
                            <p style="margin-left:15px;margin-top:5px;font-family:arial;font-size:18px;">NISN</p>
                        </td>
                        <td>
                            <p style="margin-left:15px;margin-top:5px;font-family:arial;font-size:18px;"> :</p>
                        </td>
                        <td><input type="text" name="nisn" style="margin-left:30px;width:500px;" class="form-control" value="<?php echo $data['nisn'];?>"
                                required></td>
                    </tr>
                    <tr>
                        <td>
                            <p style="margin-left:15px;margin-top:5px;font-family:arial;font-size:18px;">Nama</p>
                        </td>
                        <td>
                            <p style="margin-left:15px;margin-top:5px;font-family:arial;font-size:18px;">:</p>
                        </td>
                        <td><input type="text" name="nama" style="margin-left:30px;width:500px;" class="form-control" size="30"
                                value="<?php echo $data['nama'];?>" required></td>
                    </tr>
                    <tr>
                        <td>
                            <p style="margin-left:15px;margin-top:5px;font-family:arial;font-size:18px;">Jenis Kelamin</p>
                        </td>
                        <td>
                            <p style="margin-left:15px;margin-top:5px;font-family:arial;font-size:18px;">:</p>
                        </td>
                        <td>
                            <select name="jenis_kelamin" required style="margin-left:30px;width:500px;" class="form-control">
                            <option value=""></option>
                            <option value="..." <?php if ($data['jenis_kelamin'] == '...'){ echo 'selected';}?>>...</option>
                            <option value="Laki-Laki" <?php if ($data['jenis_kelamin'] == 'Laki-Laki'){ echo 'selected';}?>>Laki-Laki</option>
                            <option value="Perempuan" <?php if ($data['jenis_kelamin'] == 'Perempuan'){ echo 'selected';}?>>Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <td>
                        <p style="margin-left:15px;margin-top:5px;font-family:arial;font-size:18px;">Tempat Lahir</p>
                    </td>
                    <td>
                        <p style="margin-left:15px;margin-top:5px;font-family:arial;font-size:18px;">:</p>
                    </td>
                    <td><input type="text" name="tempat_lahir" size="30" style="margin-left:30px;width:500px;" class="form-control"
                            value="<?php echo $data['tempat_lahir'];?>" required></td>
                    </tr>
                    <td>
                        <p style="margin-left:15px;margin-top:5px;font-family:arial;font-size:18px;">Tanggal Lahir</p>
                    </td>
                    <td>
                        <p style="margin-left:15px;margin-top:5px;font-family:arial;font-size:18px;">:</p>
                    </td>
                    <td><input type="text" name="tanggal_lahir" size="30" style="margin-left:30px;width:500px;" class="form-control"
                            value="<?php echo $data['tanggal_lahir'];?>" required></td>
                    </tr>
                    <td>
                        <p style="margin-left:15px;margin-top:5px;font-family:arial;font-size:18px;">Agama</p>
                    </td>
                    <td>
                        <p style="margin-left:15px;margin-top:5px;font-family:arial;font-size:18px;">:</p>
                    </td>
                    <td><input type="text" name="agama" size="30" style="margin-left:30px;width:500px;" class="form-control"
                            value="<?php echo $data['agama'];?>" required></td>
                    </tr>
                    <td>
                        <p style="margin-left:15px;margin-top:5px;font-family:arial;font-size:18px;">Nomor Telepon</p>
                    </td>
                    <td>
                        <p style="margin-left:15px;margin-top:5px;font-family:arial;font-size:18px;">:</p>
                    </td>
                    <td><input type="text" name="no_hp" size="30" style="margin-left:30px;width:500px;" class="form-control"
                            value="<?php echo $data['no_hp'];?>" required></td>
                    </tr>
                    <td>
                        <p style="margin-left:15px;margin-top:5px;font-family:arial;font-size:18px;">Alamat</p>
                    </td>
                    <td>
                        <p style="margin-left:15px;margin-top:5px;font-family:arial;font-size:18px;">:</p>
                    </td>
                    <td><input type="text" name="alamat" size="30" style="margin-left:30px;width:500px;" class="form-control"
                            value="<?php echo $data['alamat'];?>" required></td>
                    </tr>
                    <td>
                        <p style="margin-left:15px;margin-top:5px;font-family:arial;font-size:18px;">Jarak Rumah</p>
                    </td>
                    <td>
                        <p style="margin-left:15px;margin-top:5px;font-family:arial;font-size:18px;">:</p>
                    </td>
                    <td><input type="text" name="jarak_rumah" size="30" style="margin-left:30px;width:500px;" class="form-control"
                            value="<?php echo $data['jarak_rumah'];?>" required></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td></td>
                        <td><input type="submit" style="margin-left:30px;" name="simpan" value="simpan" type="button" class="btn btn-info"></td>
                    </tr>
                </table>
            </form>
</body>

</html>