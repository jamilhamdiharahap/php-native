<?php include '../views/acheader.php';
// include '../controllers/controller.php';

if (isset($_POST['submit'])) {
    $verifikasi = new Admin();
    $lokasi = $_POST['kantorAdmin'];
    $ktp = $_POST['ktp'];
    $fotoDiri = $_POST['fotoDiri'];
    $gender = $_POST['gender'];
    if ($verifikasi->verifikasi($lokasi, $ktp, $fotoDiri, $gender) == true) {
        echo "<script>alert('SUKSES');</script>";
    }
}

?>


<div class="content-wrapper">
    <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">verifikasi Admin</h4>
                <p class="card-description"> </p>
                <form action="" class="forms-sample" method="POST">
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Lokasi</label>
                        <div class="col-md-9">
                            <div class="form-group row">
                                <div class="col-sm-9">
                                    <select class="form-control" name="kantorAdmin" id="profil">

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Foto Ktp</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="ktp" placeholder="Ktp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Foto Diri</label>
                        <div class="col-sm-9">
                            <input type="file" name="fotoDiri" class="form-control" placeholder="Foto Diri">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-4">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="gender" id="membershipRadios1" value="Laki-Laki" checked> Laki-Laki </label>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="gender" id="membershipRadios2" value="Perempuan"> Perempuan </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Verifikasi</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="../API/js/App3.js"></script>
<?php include '../views/acfooter.php'; ?>