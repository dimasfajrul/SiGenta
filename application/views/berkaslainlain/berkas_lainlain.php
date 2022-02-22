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
                                <div class="col-8">
                                    <h6>Berkas Lain-lain</h6>
                                    <a href="<?= base_url('BerkasLainLain/tambah') ?>" class="btn btn-primary" type="button">Tambah Data</a>
                                    <button type="button" class="btn btn-outline-primary">Tabel Kendali</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul Berkas</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Keterangan</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Berkas</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    1
                                                </div>
                                            </td>
                                            <td class="text-sm font-weight-bold mb-0">asdasd</td>
                                            <td class="text-sm font-weight-bold mb-0">asdasd</td>
                                            <td class="align-middle">
                                                <a href="" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Lihat berkas
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="<?= base_url('BerkasLainLain/edit') ?>" class="text-info font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                                |
                                                <a href="" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    2
                                                </div>
                                            </td>
                                            <td class="text-sm font-weight-bold mb-0">asdasd</td>
                                            <td class="text-sm font-weight-bold mb-0">asdasd</td>
                                            <td class="align-middle">
                                                <a href="" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Lihat berkas
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="<?= base_url('BerkasLainLain/edit') ?>" class="text-info font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                                |
                                                <a href="" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    3
                                                </div>
                                            </td>
                                            <td class="text-sm font-weight-bold mb-0">asdasd</td>
                                            <td class="text-sm font-weight-bold mb-0">asdasd</td>
                                            <td class="align-middle">
                                                <a href="" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Lihat berkas
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="<?= base_url('DataIsu/edit') ?>" class="text-info font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                                |
                                                <a href="" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <?php $this->load->view('partials/footer'); ?>