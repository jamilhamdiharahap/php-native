<?php
include '../views/acheader.php';
?>
<div class="content-wrapper">
    <div class="col-md-15 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Biaya Pengiriman</h4>
                <p class="card-description"> </p>
                <form class="forms-sample" method="POST">
                    <div class="form-group row">
                        <div class="col-6">
                            <label>DARI</label>
                            <div>
                                <input id="awal" type="text" class="form-control" autocomplete="off" required />
                            </div>
                        </div>
                        <div class="col-5">
                            <label>KE</label>
                            <div>
                                <input id="tujuan" type="text" class="form-control" autocomplete="off" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Pengirim</label>
                            <div>
                                <select class="form-control" id="dari">

                                </select>
                            </div>
                        </div>
                        <div class="col-5">
                            <label>Penerima</label>
                            <div>
                                <select class="form-control" id="ke">

                                </select>
                            </div>
                        </div>
                        <div class="col-1">
                            <label>Berat</label>
                            <div id="bloodhound">
                                <input class="typeahead" autocomplete="off" type="number" id="kg" name="kg" placeholder="Kg" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-1">
                            <div class="col-sm-20">
                                <button type="button" id="button" name="cari" class="btn btn-primary">Periksa Biaya</button>
                            </div>
                        </div>
                    </div>
                </form>
                <table class="table table-bordered" id="tampil">

                </table>
            </div>
        </div>
    </div>
</div>

<script src="../API/js/App.js"></script>
<?php include '../views/acfooter.php'; ?>