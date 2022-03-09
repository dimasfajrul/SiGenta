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
            <?php } ?>
            <?php if (!empty($error_msg)) { ?>
                <?php echo $error_msg; ?>
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
                            <form action="<?= site_url('KelolaAkun/upPass') ?>" method="post">
                                <!-- Address -->
                                <h6 class="heading-small text-muted mb-4">Password</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="pwlama">Password Lama</label>
                                                <input id="pwlama" name="pwlama" class="form-control" value="" placeholder="Masukkan password lama anda ..." type="password">
                                                <?= form_error('pwlama', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="pwbaru">Password Baru</label>
                                                <input id="pwbaru" name="pwbaru" class="form-control" value="" placeholder="Masukkan password baru anda ..." type="password">
                                                <?= form_error('pwbaru', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="konfirpwbaru">Konfirmasi Password Baru</label>
                                                <input id="konfirpwbaru" name="konfirpwbaru" class="form-control" value="" placeholder="Masukkan kembali password baru anda ..." type="password">
                                                <?= form_error('konfirpwbaru', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-4" />
                                    <div class="form-group text-right">
                                        <a href="<?= base_url("KelolaAkun/profile") ?>" class="btn btn-icon btn-danger" type="button">
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