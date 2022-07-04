<?php

require '../config/database.php';

class Layanan extends Database
{
    public $nama,
        $jarak,
        $tarif,
        $hari;
    private $earthRadius = 6371000;

    function __construct($nama, $id_asal, $id_tujuan, $berat, $kecepatan = 1)
    {
        $this->nama = $nama;
        $database = new Database();
        $query = "SELECT * FROM kabupaten WHERE id = '$id_asal'";
        $asal = mysqli_query($database->connect(), $query)->fetch_assoc();
        $query = "SELECT * FROM kabupaten WHERE id = '$id_tujuan'";
        $tujuan = mysqli_query($database->connect(), $query)->fetch_assoc();

        $latFrom = deg2rad($asal['lintang']);
        $lonFrom = deg2rad($asal['bujur']);
        $latTo = deg2rad($tujuan['lintang']);
        $lonTo = deg2rad($tujuan['bujur']);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
            cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        $jarak = $angle * $this->earthRadius;
        $this->jarak = round($jarak);
        $this->tarif = round($jarak * $berat / 1000) * 100 * $kecepatan;
        $this->hari = round($jarak / 50000 / $kecepatan);
    }
}



$reguler = new Layanan('Reguler', $_GET['asal'], $_GET['tujuan'], $_GET['berat']);
$express = new Layanan('Express', $_GET['asal'], $_GET['tujuan'], $_GET['berat'], 2);
$super_express = new Layanan('Super Express', $_GET['asal'], $_GET['tujuan'], $_GET['berat'], 3);
$sd_express = new Layanan('Super Duper Express', $_GET['asal'], $_GET['tujuan'], $_GET['berat'], 5);

$data = [$reguler, $express, $super_express, $sd_express];

echo json_encode($data);
