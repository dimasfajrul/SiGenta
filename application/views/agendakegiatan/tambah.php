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
                                    <h6>Tambah Agenda Kegiatan</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 pb-2">
                            <div class="row pl-2">
                                <form method="post" action="<?= site_url('AgendaKegiatan/tambah') ?>" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Agenda Kegiatan</label>
                                                <input name="agenda" id="agenda" class="form-control" type="text" placeholder="Masukkan agenda kegiatan ..." id="example-text-input">
                                                <?= form_error('agenda', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Waktu Kegiatan</label>
                                                <input name="waktu" id="waktu" class="form-control" type="time" placeholder="Masukkan waktu kegiatan ..." id="example-text-input">
                                                <?= form_error('waktu', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tanggal Kegiatan</label>
                                                <input name="tanggal" id="tanggal" class="form-control" type="date" placeholder="Masukkan tanggal kegiatan ..." id="example-text-input">
                                                <?= form_error('tanggal', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tempat Kegiatan</label>
                                                <input name="tempat" id="tempat" class="form-control" type="text" placeholder="Masukkan tempat kegiatan ..." id="example-text-input">
                                                <?= form_error('tempat', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Jenis Kegiatan</label>
                                                <select name="icon" id="icon" class="form-control">
                                                    <option value="">--- Pilih ---</option>
                                                    <option value="ni ni-building text-primary"><i class="ni ni-building"></i>Rapat Koordinasi Dalam Kantor</option>
                                                    <option value="ni ni-laptop text-success"><i class="ni ni-laptop"></i>Rapat Koordinasi Virtual Meeting</option>
                                                    <option value="ni ni-delivery-fast text-warning"><i class="ni ni-delivery-fast"></i>Kunjungan Lapangan</option>
                                                    <option value="ni ni-calendar-grid-58 text-danger"><i class="ni ni-calendar-grid-58"></i>Rapat Koordinasi dan Kunjungan Lapangan</option>
                                                    <option value="ni ni-satisfied text-info"><i class="ni ni-satisfied"></i>Audiensi</option>
                                                </select>
                                                <?= form_error('icon', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Link</label>
                                                <input name="link" id="link" class="form-control" type="text" placeholder="Masukkan link zoom/meet/dll ..." id="example-text-input">
                                                <?= form_error('link', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <a href="<?= base_url('AgendaKegiatan') ?>" class="btn btn-icon btn-secondary">
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