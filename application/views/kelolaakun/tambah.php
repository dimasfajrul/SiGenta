<?php $this->load->view('partials/header'); ?>

<body class="g-sidenav-show  bg-gray-100">
    <?php $this->load->view('partials/sidebar'); ?>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <?php $this->load->view('partials/navbar'); ?>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-10">
                                    <h6>Tambah Akun</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 pb-2">
                            <div class="row pl-2">
                                <form method="post" action="<?= site_url('KelolaAkun/tambah') ?>" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama</label>
                                                <input name="nama" id="nama" class="form-control" type="text" placeholder="Masukkan nama ...">
                                                <?= form_error('nama', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="example-search-input" class="form-control-label">Email</label>
                                                <input name="email" id="email" class="form-control" type="text" placeholder="Masukkan email ...">
                                                <?= form_error('email', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="example-search-input" class="form-control-label">Level</label>
                                                <select name="role" id="role" class="form-control">
                                                    <option value="">--- Pilih level akun ---</option>
                                                    <option value="0">Admin</option>
                                                    <option value="1">User</option>
                                                </select>
                                                <?= form_error('role', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Password</label>
                                                <input name="password1" id="password1" class="form-control" type="password" placeholder="Masukkan link password ...">
                                                <?= form_error('password1', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Konfirmasi Password</label>
                                                <input name="password2" id="password2" class="form-control" type="password" placeholder="Masukkan link password ...">
                                                <?= form_error('password2', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <a href="<?= base_url('KelolaAkun') ?>" class="btn btn-icon btn-secondary">
                                                <span class="btn-inner--text">Kembali</span>
                                            </a>
                                            <button class="btn btn-icon btn-info" type="submit">
                                                <span class="btn-inner--text">Simpan</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('partials/footer'); ?>