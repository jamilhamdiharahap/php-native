<?php
include '../controllers/controller.php';
$data = new Daerah();
$data_provinsi = $data->provinsi();

$provinces = [];
while ($provinces = $data_provinsi->fetch_object()) {
    $provinsi[] = $provinces;
}
echo json_encode($provinsi);
