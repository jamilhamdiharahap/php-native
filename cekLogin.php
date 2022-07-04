<?php
include 'loginClass.php';

session_start();
$login = new Login();

$email = $_POST['email'];
$pass = $_POST['pass'];
$adminMaster = $login->admin($email, $pass);
$adminCabang = $login->login($email);
if (isset($adminMaster) && empty($adminCabang)) {
    $admin = $login->admin($email, $pass);
    $_SESSION['email'] = $admin['email'];
    $_SESSION['foto'] = $admin['foto'];
    $_SESSION['nama'] = $admin['nama'];
    $_SESSION['total'] = $login->TotalAdmin();
    $_SESSION['log_adminMaster'] = true;
    header('location:./admin/adminMaster.php');
} else {
    if (isset($adminCabang) && empty($adminMaster)) {
        $login = $login->login($email);
        if (password_verify($pass, $login['pass'])) {
            $_SESSION['admin'] = $email;
            $_SESSION['nama'] = $login['nama'];
            $_SESSION['id_cabang'] = $login['id'];
            $_SESSION['log_admin'] = true;
            header('location:./admin/adminDaerah.php');
        } else {
            header('location: login.php');
        }
    } else {
        header('location: login.php');
    }
}
