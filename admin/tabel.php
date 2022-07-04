<?php
include '../views/amheader.php';
$models = new adminMaster();

?>
<div id="wrapper">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tabel Register</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Tanggal Daftar</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($models->adminDaerah() as $value) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value['nama'] ?></td>
                                            <td><?= $value['tanggal'] ?></td>
                                            <td><?= $value['email'] ?></td>
                                            <td>
                                                <a href="#" id="myModal"><i class="fas fa-user-edit btn btn-outline-primary"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt  btn btn-outline-danger"></i></a>
                                            </td>
                                        <?php endforeach; ?>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Admin</h5>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Detail Admin</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Frofil</th>
                                        <th scope="col">Ktp</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">kabupaten/Kota</th>
                                        <th scope="col">Provinsi</th>
                                        <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($models->DataAdmin() as $value) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value['nama'] ?></td>
                                            <td><?= $value['fotoDiri'] ?></td>
                                            <td><?= $value['fotoKtp'] ?></td>
                                            <td><?= $value['jenisKelamin'] ?></td>
                                            <td><?= $value['kabupatenNama'] ?></td>
                                            <td><?= $value['provinsiNama'] ?></td>

                                            <td>
                                                <a href="#" id="myModal"><i class="fas fa-user-edit btn btn-outline-primary"></i></a>
                                                <a href="#deleteEmployeeModal<?= $value['nama'] ?>" data-toggle="modal"><i class="far fa-trash-alt btn btn-outline-danger"></i></a>
                                            </td>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <!--End Row-->


            <div class="row">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Hover Table</h5>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Row-->

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Small Table</h5>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Responsive Table</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Row-->

            <!--start overlay-->
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->

        </div>
        <!-- End container-fluid-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 2021 NEOPYTHE 19
                </div>
            </div>
        </footer>
        <!-- 
        <div class="col-lg-10" id="Input">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Register Admin</div>
                    <hr>
                    <form action="./cekRegister.php" method="POST" onsubmit="validasi()">
                        <div class="form-group">
                            <label for="input-1">Nama</label>
                            <input type="text" name="nama" class="form-control" id="input-1" placeholder="Enter Your Name" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>
                        <div class=" form-group">
                            <label for="input-2">Email</label>
                            <input type="email" name="email" class="form-control" id="input-2" placeholder="Enter Your Email Address" required>
                        </div>
                        <div class="form-group">
                            <label for="input-4">Password</label>
                            <input type="password" name="pass" class="form-control" id="input-3" placeholder="Enter Password" required minlength="6" maxlength="12">
                        </div>
                        <div class="form-group">
                            <label for="input-5">Confirm Password</label>
                            <input type="password" name="pass1" class="form-control" id="input-4" placeholder="Confirm Password" required>
                        </div>
                        <div class="form-group py-2">
                            <div class="icheck-material-white">
                                <input type="checkbox" id="user-checkbox1" checked="" />
                                <label for="user-checkbox1">I Agree Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
        <?php foreach ($models->DataAdmin() as $value) : ?>
            <div id="deleteEmployeeModal<?= $value['id'] ?>" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="">
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Member/User</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus ?</p>
                                <p class="text-warning"><small><?= strtoupper($value['nama']); ?>.</small></p>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <a href="deleteUser.php?id=<?= $value['id'] ?>" class="btn btn-danger">Hapus</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('Input')

    myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
    })
</script>