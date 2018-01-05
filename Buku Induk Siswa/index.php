<html>

<head>
    <title>Simple CRUD</title>
    <link rel="stylesheet" href="bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <script src="bootstrap/3.1.1/jquery.min.js"></script>
    <script src="bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="jumbotron" style="border-radius:0px;background-color:#5cb2e8;font-color:white;">
        <h2 style="color:white; margin-left:60px;" data-animation="animated bounceInDown">Buku Induk | Siswa</h2>
        <h5 style="color:white;margin-left:60px;" data-animation="animated bounceInUp">SMK NEGERI 1 PURWOSARI</h5>
    </div>
    </div>
    <div class="jumbotron" style="border-radius:0px;background-color:#eeebeb;margin-top:-30px;height:75%;font-color:white;">
        <p style="text-align:center;margin-top:5px;font-family:arial;font-size:30px;">Selamat Datang!</p>
        <form action="login.php" style="margin-left:310px;margin-top:60px;" method="post">
            <table cellpadding="3" cellspacing="0">
                <tr>
                    <td>
                        <p style="margin-left:220px;margin-top:5px;font-family:arial;font-size:18px;">Username</p>
                    </td>
                    <td>
                        <p style="margin-left:10px;margin-top:5px;font-family:arial;font-size:18px;">:</p>
                    </td>
                    <td><input type="text" name="username" size="30" style="margin-left:10px;" class="form-control" required></td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left:220px;margin-top:5px;font-family:arial;font-size:18px;">Password</p>
                    </td>
                    <td>
                        <p style="margin-left:10px;margin-top:5px;font-family:arial;font-size:18px;">:</p>
                    </td>
                    <td><input type="password" name="password" style="margin-left:10px;" class="form-control" required></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td></td>
                    <td><input type="submit" name="login" class="btn btn-info" value="Login" style="margin-left:10px;"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>