<?php
include '../controllers/controller.php';
$data = new Datapengiriman();
session_start();
$pengirim = $_POST['1'];
$penerima = $_POST['2'];
$alamatP1 = $_POST['3'];
$alamatP2 = $_POST['4'];
$telpon1 = $_POST['5'];
$telpon2 = $_POST['6'];
$layanan = $_POST['layanan'];
$data->dataPengiriman($_SESSION['id_cabang'], $pengirim, $telpon1, $alamatP1, $penerima, $telpon2, $alamatP2, $layanan);
echo "<script>alert('Sedang di Proses')</script>";
header('location: pengiriman.php');
