<?php
include '../views/amheader.php';
$models = new adminMaster();

if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $almt = $_POST['alamat'];
    $usename = $_POST['username'];
    $pass = $_POST['pass'];
    $pass1 = $_POST['pass1'];
    if ($pass == $pass1) {
        $models->updateFrofil($id, $nama, $almt, $email, $usename, $pass);
    } else {
        echo "<script>alert('PASSWORD TIDAK VALID');</script>";
    }
}
?>
<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-4">
                <div class="card profile-card-2">
                    <div class="card-img-block">

                        <img class="img-fluid" src="../assets/images/neophyte - zoom.png" alt="Card image cap">

                    </div>
                    <div class="card-body pt-5">
                        <?php foreach ($models->adminFrofil() as $value) : ?>
                            <img src="../assets/images/<?= $value['foto'] ?>" alt="profile-image" class="profile">
                            <h5 class="card-title"><?= $value['nama'] ?></h5>
                            <p class="card-text"><?= $value['alamat'] ?></p>
                            <div class="icon-block">
                            <?php endforeach; ?>
                            <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
                            <a href="javascript:void();"> <i class="fa fa-twitter bg-twitter text-white"></i></a>
                            <a href="javascript:void();"> <i class="fa fa-google-plus bg-google-plus text-white"></i></a>
                            </div>
                    </div>

                    <div class="card-body border-top border-light">
                        <div class="media align-items-center">
                            <div>
                                <img src="../assets/images/timeline/html5.svg" class="skill-img" alt="skill img">
                            </div>
                            <div class="media-body text-left ml-3">
                                <div class="progress-wrapper">
                                    <p>HTML5 <span class="float-right">90%</span></p>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" style="width:90%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="media align-items-center">
                            <div><img src="../assets/images/timeline/css-3.svg" class="skill-img" alt="skill img"></div>
                            <div class="media-body text-left ml-3">
                                <div class="progress-wrapper">
                                    <p>Css <span class="float-right">80%</span></p>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" style="width:80%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="media align-items-center">
                            <div><img src="../assets/images/timeline/icons8-javascript.svg" class="skill-img" alt="skill img"></div>
                            <div class="media-body text-left ml-3">
                                <div class="progress-wrapper">
                                    <p>javaScript <span class="float-right">90%</span></p>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" style="width:90%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="media align-items-center">
                            <div><img src="../assets/images/timeline/icons8-php-logo.svg" class="skill-img" alt="skill img"></div>
                            <div class="media-body text-left ml-3">
                                <div class="progress-wrapper">
                                    <p>PHP <span class="float-right">80%</span></p>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" style="width:80%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <hr>
                        <div class="media align-items-center">
                            <div><img src="../assets/images/timeline/react.svg" class="skill-img" alt="skill img"></div>
                            <div class="media-body text-left ml-3">
                                <div class="progress-wrapper">
                                    <p>React JS <span class="float-right">93%</span></p>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" style="width:93%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">Messages</span></a>
                            </li> -->
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                            </li>
                        </ul>
                        <div class="tab-content p-3">
                            <div class="tab-pane active" id="profile">
                                <h5 class="mb-3">Profile</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Tentang</h6>
                                        <p>
                                            Web Developer, Programmer PHP
                                        </p>
                                        <h6>Hobby</h6>
                                        <p>
                                            Berenang dan Menjelajah hutan
                                        </p>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <h6>Recent badges</h6>
                                        <a href="javascript:void();" class="badge badge-dark badge-pill">html5</a>
                                        <a href="javascript:void();" class="badge badge-dark badge-pill">react</a>
                                        <a href="javascript:void();" class="badge badge-dark badge-pill">codeply</a>
                                        <a href="javascript:void();" class="badge badge-dark badge-pill">angularjs</a>
                                        <a href="javascript:void();" class="badge badge-dark badge-pill">css3</a>
                                        <a href="javascript:void();" class="badge badge-dark badge-pill">jquery</a>
                                        <a href="javascript:void();" class="badge badge-dark badge-pill">bootstrap</a>
                                        <a href="javascript:void();" class="badge badge-dark badge-pill">responsive-design</a>
                                        <hr>
                                        <span class="badge badge-primary"><i class="fa fa-user"></i> 900 Followers</span>
                                        <span class="badge badge-success"><i class="fa fa-cog"></i> 43 Forks</span>
                                        <span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
                                    </div> -->
                                    <div class="col-md-12">
                                        <h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span>Aktivitas</h5>
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <strong>Ngoding </strong>Projekan PHP<strong></strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>Do the best </strong>Tube number one
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>Menuju </strong> Laravel
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!-- <div class="tab-pane" id="messages">
                                <div class="alert alert-info alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <div class="alert-icon">
                                        <i class="icon-info"></i>
                                    </div>
                                    <div class="alert-message">
                                        <span><strong>Info!</strong> Lorem Ipsum is simply dummy text.</span>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> -->
                            <div class="tab-pane" id="edit">
                                <?php foreach ($models->adminFrofil() as $value) : ?>
                                    <form action="" method="POST">
                                        <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Nama</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="nama" type="text" value="<?= $value['nama'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="email" type="email" value="<?= $value['email'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Profil</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="foto" type="file" value="<?= $value['foto'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="alamat" type="text" value="<?= $value['alamat'] ?>" placeholder="Street">
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value="" placeholder="City">
                                        </div>
                                        <div class="col-lg-3">
                                            <input class="form-control" type="text" value="" placeholder="State">
                                        </div>
                                    </div> -->

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="username" type="text" value="<?= $value['username'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="pass" type="password" value="<?= $value['pass'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="pass1" type="password" value="<?= $value['pass'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label"></label>
                                            <div class="col-lg-9">
                                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                                <input type="submit" name="save" class="btn btn-primary" value="Save">
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->

    </div>
    <!-- End container-fluid-->
</div>