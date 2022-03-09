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
                                    <h6>Tambah Berkas dan Dokumentasi</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 pb-2">
                            <div class="row pl-2">
                                <form method="post" action="<?= site_url('Dokumentasi/tambah') ?>" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Judul</label>
                                                <input name="judul" id="judul" class="form-control" type="text" placeholder="Masukkan judul ..." id="example-text-input">
                                                <?= form_error('judul', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="example-search-input" class="form-control-label">Kegiatan</label>
                                                <input name="kegiatan" id="kegiatan" class="form-control" type="text" placeholder="Masukkan Kegiatan ..." id="example-search-input">
                                                <?= form_error('kegiatan', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="example-search-input" class="form-control-label">Isu</label>
                                            <select name="isu" id="isu" class="form-control">
                                                <option value="Garam">Garam</option>
                                                <option value="Marine Bioproduct">Marine Bioproduct</option>
                                                <option value="Kontainer Berpendingin">Kontainer Berpendingin</option>
                                                <option value="Produk Olahan KP">Produk Olahan KP</option>
                                                <option value="Indonesia-Korea">Indonesia-Korea</option>
                                                <option value="Kincir Air">Kincir Air</option>
                                                <option value="Lain-Lain">Lain-Lain</option>
                                            </select>
                                            <?= form_error('isu', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                        </div>
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
                                            <a href="<?= base_url('Dokumentasi') ?>" class="btn btn-icon btn-secondary">
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