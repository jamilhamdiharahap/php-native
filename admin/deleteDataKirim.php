<?php
include '../controllers/controller.php';
$delete = new Datapengiriman();
$id = $_GET['id'];

$delete->deleteDataKirim($id);
if ($delete) {
    header('location: tabelDaerah.php');
}
