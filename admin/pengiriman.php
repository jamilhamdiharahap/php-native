<?php include '../views/acheader.php';
?>
<div class="content-wrapper">
    <div class="page-header">
        <h1 class="page-title"> J&H Express </h1>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kirim Barang</h4>
                    <form class="form-sample" action="./cekPengiriman.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pengirim</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="1" id="nama1" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Penerima</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="2" id="nama2" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Alamat pengirim</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="3" id="pengirim">

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Alamat penerima</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="4" id="penerima">

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Telepon</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="5" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Telepon</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="6" class="form-control" required />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <!-- <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">State</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" required />
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-6">

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Layanan</label>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="layanan" id="1" value="Reguler"> Reguler </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="layanan" id="2" value="Express"> Express </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="layanan" id="3" value="Super Express"> Super Express </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="layanan" class="form-check-input" id="4" value="Super Duper Express"> Super Duper Express </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Berat</label>
                                    <div class="col-sm-2">
                                        <input type="number" id="kg" name="berat" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered table-contextual" id="tabelBayar"> </table>

                        </div>
                        <div class="row">
                            <label class="col-sm-11 col-form-label"></label>
                            <div class="form-group row">
                                <div class="col-sm-20">
                                    <button type="button" id="button" class="btn btn-primary btn-icon-text"> Bayar <i class="mdi mdi-coin"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-11 col-form-label"></label>
                            <div class="form-group row">
                                <div class="col-sm-20">
                                    <button type="submit" name="submit" class="btn btn-info btn-icon-text"> Print <i class="mdi mdi-printer btn-icon-append"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
<script src="../API/js/App2.js"></script>
<script src="../API/js/pengirimanApi.js"></script>
</div>


<?php include '../views/acfooter.php'; ?>