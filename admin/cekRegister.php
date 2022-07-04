<?php
include '../controllers/controller.php';
$models = new Admin();
$wilayah = $_POST['provinsi'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pass1 = $_POST['pass1'];

if ($pass == $pass1) {
    $password = password_hash($pass, PASSWORD_DEFAULT);
    $models->registerAdmin($wilayah, $nama, $email, $password);
    echo "<script>alert('ADMIN BERHASIL DITAMBAHKAN');window.location.href='addAdmin.php'</script>";
} else {
    echo "<script>alert('REGISTER GAGAL');window.location.href='addAdmin.php'</script>";
}
