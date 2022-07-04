<?php
include '../views/amheader.php';

?>

<div id="wrapper">
    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Register Admin</div>
                            <hr>
                            <form action="./cekRegister.php" method="POST" onsubmit="validasi()">
                                <div class="form-group">
                                    <label for="input-1">Wilayah</label>
                                    <select name="provinsi" class="form-control" id="provinsi">

                                    </select>
                                </div>
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
                </div>
                <div class="col-lg-4">
                    <div class="card profile-card-2">
                        <div class="card-img-block">
                            <img class="img-fluid" src="https://via.placeholder.com/800x500" alt="Card image cap">
                        </div>
                        <div class="card-body pt-5">
                            <img src="https://via.placeholder.com/110x110" alt="profile-image" class="profile">
                            <h5 class="card-title">Mark Stern</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="icon-block">
                                <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
                                <a href="javascript:void();"> <i class="fa fa-twitter bg-twitter text-white"></i></a>
                                <a href="javascript:void();"> <i class="fa fa-google-plus bg-google-plus text-white"></i></a>
                            </div>
                        </div>

                        <div class="card-body border-top border-light">
                            <div class="media align-items-center">
                                <div>
                                    <img src="assets/images/timeline/html5.svg" class="skill-img" alt="skill img">
                                </div>
                                <div class="media-body text-left ml-3">
                                    <div class="progress-wrapper">
                                        <p>HTML5<span class="float-right">65%</span></p>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" style="width:65%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="media align-items-center">
                                <div><img src="assets/images/timeline/bootstrap-4.svg" class="skill-img" alt="skill img"></div>
                                <div class="media-body text-left ml-3">
                                    <div class="progress-wrapper">
                                        <p>Bootstrap 4 <span class="float-right">50%</span></p>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" style="width:50%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="media align-items-center">
                                <div><img src="assets/images/timeline/angular-icon.svg" class="skill-img" alt="skill img"></div>
                                <div class="media-body text-left ml-3">
                                    <div class="progress-wrapper">
                                        <p>AngularJS <span class="float-right">70%</span></p>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" style="width:70%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- <div class="media align-items-center">
                                <div><img src="assets/images/timeline/react.svg" class="skill-img" alt="skill img"></div>
                                <div class="media-body text-left ml-3">
                                    <div class="progress-wrapper">
                                        <p>React JS <span class="float-right">35%</span></p>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" style="width:35%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                    </div>

                </div>
                <!-- <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Round Vertical Form</div>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label for="input-6">Name</label>
                                    <input type="text" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group">
                                    <label for="input-7">Email</label>
                                    <input type="text" class="form-control form-control-rounded" id="input-7" placeholder="Enter Your Email Address">
                                </div>
                                <div class="form-group">
                                    <label for="input-8">Mobile</label>
                                    <input type="text" class="form-control form-control-rounded" id="input-8" placeholder="Enter Your Mobile Number">
                                </div>
                                <div class="form-group">
                                    <label for="input-9">Password</label>
                                    <input type="text" class="form-control form-control-rounded" id="input-9" placeholder="Enter Password">
                                </div>
                                <div class="form-group">
                                    <label for="input-10">Confirm Password</label>
                                    <input type="text" class="form-control form-control-rounded" id="input-10" placeholder="Confirm Password">
                                </div>
                                <div class="form-group py-2">
                                    <div class="icheck-material-white">
                                        <input type="checkbox" id="user-checkbox2" checked="" />
                                        <label for="user-checkbox2">I Agree Terms & Conditions</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
            </div>
            <!--End Row-->

            <!--start overlay-->
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->

        </div>
        <!-- End container-fluid-->

    </div>
    <!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <footer class="footer">
        <div class="container">
            <div class="text-center">
                Copyright © 2018 Dashtreme Admin
            </div>
        </div>
    </footer>
</div>

<script src="../API/js/App4.js"></script>