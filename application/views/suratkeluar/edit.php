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
                                    <h6>Edit Surat Keluar</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 pb-2">
                            <div class="row pl-2">
                                <form method="post" action="<?= site_url('SuratKeluar/edit/' . $detail[0]->id) ?>" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Perihal</label>
                                                <input name="id" id="id" class="form-control" type="hidden" value="<?= $detail[0]->id ?>">
                                                <input name="created_at" id="created_at" class="form-control" type="hidden" value="<?= $detail[0]->created_at ?>">
                                                <input name="perihal" id="perihal" class="form-control" type="text" placeholder="Masukkan perihal ..." value="<?= $detail[0]->perihal ?>">
                                                <?= form_error('perihal', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="example-search-input" class="form-control-label">No. Surat</label>
                                                <input name="no" id="no" class="form-control" type="text" placeholder="Masukkan no surat   ..." value="<?= $detail[0]->no_surat ?>">
                                                <?= form_error('no', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="example-search-input" class="form-control-label">Tanggal</label>
                                                <input name="tanggal" id="tanggal" class="form-control" type="date" placeholder="Masukkan tanggal   ..." value="<?= $detail[0]->tanggal ?>">
                                                <?= form_error('tanggal', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Link berkas</label>
                                                <input name="link" id="link" class="form-control" type="text" placeholder="Masukkan link berkas ..." value="<?= $detail[0]->link ?>">
                                                <?= form_error('link', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <a href="<?= base_url('SuratKeluar') ?>" class="btn btn-icon btn-secondary">
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