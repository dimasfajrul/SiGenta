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
                                    <h6>Tambah Data Isu</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 pb-2">
                            <div class="row pl-2">
                                <form method="post" action="<?= site_url('DataIsu/tambah') ?>" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Judul</label>
                                                <input name="nama" id="nama" class="form-control" type="text" placeholder="Masukkan judul isu ..." id="example-text-input">
                                                <?= form_error('nama', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="example-search-input" class="form-control-label">Isu</label>
                                                <input name="nohp" id="nohp" class="form-control" type="search" placeholder="Masukkan isu ..." id="example-search-input">
                                                <?= form_error('nohp', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Link berkas</label>
                                                <input name="nama" id="nama" class="form-control" type="text" placeholder="Masukkan link berkas ..." id="example-text-input">
                                                <?= form_error('nama', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <a href="<?= base_url('DataIsu') ?>" class="btn btn-icon btn-danger">
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
        </div>
    </main>

    <!--   Core JS Files   -->
    <script src="<?= base_url('') ?>assets/js/core/popper.min.js"></script>
    <script src="<?= base_url('') ?>assets/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url('') ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url('') ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="<?= base_url('') ?>assets/js/plugins/chartjs.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url('') ?>assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>