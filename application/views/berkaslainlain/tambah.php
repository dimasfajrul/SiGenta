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
                                    <h6>Tambah Berkas Lain-Lain </h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 pb-2">
                            <div class="row pl-2">
                                <form method="post" action="<?= site_url('BerkasLainLain/tambah') ?>" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Judul Berkas</label>
                                                <input name="judul" id="judul" class="form-control" type="text" placeholder="Masukkan judul berkas ..." id="example-text-input">
                                                <?= form_error('judul', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="example-search-input" class="form-control-label">Keterangan</label>
                                                <input name="keterangan" id="keterangan" class="form-control" type="search" placeholder="Masukkan keterangan ..." id="example-search-input">
                                                <?= form_error('keterangan', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Link berkas</label>
                                                <input name="link" id="link" class="form-control" type="text" placeholder="Masukkan link berkas ..." id="example-text-input">
                                                <?= form_error('link', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <a href="<?= base_url('BerkasLainLain') ?>" class="btn btn-icon btn-secondary">
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