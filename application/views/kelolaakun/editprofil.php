<?php $this->load->view('partials/header'); ?>

<body class="g-sidenav-show  bg-gray-100">
    <?php $this->load->view('partials/sidebar'); ?>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <?php $this->load->view('partials/navbar'); ?>
        <!-- Page content -->
        <div class="container-fluid mt--6">
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
                            <form action="<?= base_url('KelolaAkun/upProfile') ?>" method="post" enctype="multipart/form-data">
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label text-muted" for="input-username">Nama Lengkap</label>
                                                <input id="nama" name="nama" type="text" id="input-username" class="form-control" placeholder="Username" value="<?= $user['nama']; ?>">
                                                <?= form_error('nama', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label text-muted" for="input-first-name">Email</label>
                                                <input id="email" name="email" type="text" id="input-first-name" class="form-control" placeholder="First name" value="<?= $user['email']; ?>">
                                                <?= form_error('email', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
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
                                    <input type="hidden" id="created_at" name="created_at" value="<?= $user['created_at'] ?>">
                                    <input type="hidden" id="status" name="status" value="<?= $user['status'] ?>">
                                    <input type="hidden" id="role" name="role" value="<?= $user['role'] ?>">
                                    <hr class="my-4" />
                                    <div class="form-group text-right">
                                        <a href="<?= base_url("KelolaAkun/profile") ?>" class="btn btn-icon btn-danger" type="submit">
                                            <span class="btn-inner--text">Kembali</span>
                                        </a>
                                        <button class="btn btn-icon btn-success" type="submit">
                                            <span class="btn-inner--text">Simpan</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('partials/footer'); ?>