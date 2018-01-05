<?php
include('koneksi.php');
if(isset($_POST['login'])){
    $user = mysql_real_escape_string(htmlentities($_POST['username']));
    $pass = mysql_real_escape_string(htmlentities($_POST['password']));

    $sql = mysql_query("SELECT * FROM tbl_user WHERE username='$user' AND password='$pass'")or die(mysql_error());
    if(mysql_num_rows($sql) == 0){
        echo 'User tidak ditemuka';
    }else{
        $row = mysql_fetch_assoc($sql);
        if($row['level'] == 1){
            $_SESSION['admin']=$user;
            echo '<script language="javascript">alert("Anda berhasil login guru!"); document.location="admin/index-guru.php";</script>';
        }else{
            $_SESSION['guest']=$user;
            echo '<script language="javascript">alert("Anda berhasil login siswa!"); document.location="guest/index-siswa.php";</script>';
        }
    }
}
?>