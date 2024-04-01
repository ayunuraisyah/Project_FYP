<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $sandi = $_POST['sandi'];

    $cekAkun = mysqli_query($conn, "SELECT * FROM akun WHERE email = '$email' AND sandi = '$sandi'");
    if(mysqli_num_rows($cekAkun) === 1){
        $_SESSION['email'] = $email;
        header('location:/home');
    }else{
        $_SESSION['error'] = 1;
        header('location:/login');

    }
}
