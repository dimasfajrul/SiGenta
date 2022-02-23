<?php $this->load->view('partials/header'); ?>

<body class="g-sidenav-show  bg-gray-100">
    <?php $this->load->view('partials/sidebar'); ?>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <?php $this->load->view('partials/navbar'); ?>
        <!-- Page content -->
        <div class="container-fluid mt-4">
            <?php if (!empty($success_msg)) { ?>
                <?php echo $success_msg; ?>
                <?php if (!empty($error_msg)) { ?>
                    <?php echo $error_msg; ?>
                <?php } ?>
            <?php } ?>
            <div class="row">
                <div class="col-xl-4 order-xl-2">
                    <div class="card card-profile">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 order-lg-2">
                                <div class="card-profile-image pt-4">
                                    <a href="#">
                                        <img src="<?= base_url('./assets/img/team-2.jpg') ?>" alt="Foto" style="width: 100px;">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <div class="text-center">
                                <h5 class="h3">
                                    <?= $user['nama']; ?>
                                </h5>
                                <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i><?= $user['email']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">My Profile</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <h6 class="heading-small mb-4">Biodata
                                    <a href="<?= base_url('KelolaAkun/upProfile') ?>" class="btn btn-sm btn-primary" style="margin-bottom: 0rem; float: right">Edit Profile</a>
                                </h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label text-muted" for="input-username">Nama Lengkap</label>
                                                <input type="text" id="input-username" class="form-control" placeholder="Username" value="<?= $user['nama']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label text-muted" for="input-first-name">Email</label>
                                                <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="<?= $user['email']; ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label text-muted" for="input-last-name">Level</label>
                                                <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="<?php
                                                                                                                                                if ($user['role'] == 0) {
                                                                                                                                                    echo 'Admin';
                                                                                                                                                } elseif ($user['role'] == 1) {
                                                                                                                                                    echo 'User';
                                                                                                                                                }
                                                                                                                                                ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label text-muted" for="input-last-name">Status</label>
                                                <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="<?php
                                                                                                                                                if ($user['status'] == 0) {
                                                                                                                                                    echo 'Non - Aktif';
                                                                                                                                                } elseif ($user['status'] == 1) {
                                                                                                                                                    echo 'Aktif';
                                                                                                                                                }
                                                                                                                                                ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Address -->
                                <h6 class="heading-small mb-4">Password
                                    <a href="<?= base_url('KelolaAkun/upPass') ?>" class="btn btn-sm btn-warning" style="float: right;">Edit Password</a>
                                </h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label text-muted" for="input-address">Password</label>
                                                <input id="input-address" class="form-control" value="" placeholder="Password ..." type="password" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('partials/footer'); ?>