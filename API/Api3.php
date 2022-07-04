<?php
include '../controllers/controller.php';
$data = new Daerah();
$data_kabupaten = $data->kabupaten();

$kabupatens = [];
while ($kabupaten = $data_kabupaten->fetch_object()) {
    $kabupatens[] = $kabupaten;
}
echo json_encode($kabupatens);
