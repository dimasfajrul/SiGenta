<?php $this->load->view('partials/header'); ?>

<body class="g-sidenav-show  bg-gray-100">
    <?php $this->load->view('partials/sidebar'); ?>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <?php $this->load->view('partials/navbar'); ?>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <?php if (!empty($success_msg)) { ?>
                <?php echo $success_msg; ?>
                <?php if (!empty($error_msg)) { ?>
                    <?php echo $error_msg; ?>
                <?php } ?>
            <?php } ?>
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
                                        <?php if (!empty($dok)) {
                                            $no = 1;
                                            foreach ($dok as $data) { ?>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2">
                                                            <?= $no ?>
                                                        </div>
                                                    </td>
                                                    <td class="text-sm font-weight-bold mb-0"><?= $data->judul ?></td>
                                                    <td class="text-sm font-weight-bold mb-0"><?= $data->keterangan ?></td>
                                                    <td class="align-middle">
                                                        <a href="<?= $data->link ?>" class="text-secondary font-weight-bold text-xs" target="_blank">
                                                            Lihat berkas
                                                        </a>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="<?= base_url('BerkasLainLain/edit/' . $data->id) ?>" class="text-info font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                            Edit
                                                        </a>
                                                        |
                                                        <a href="<?= base_url('Dokumentasi/hapus/' . $data->id) ?>" class="text-danger font-weight-bold text-xs" type="button" onclick="javascripst: return confirm('Anda yakin menghapus data?')">
                                                            Hapus
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php $no++;
                                            } ?>
                                        <?php } else { ?>
                                            <tr>
                                                <td colspan="5">No data(s) found...</td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php $this->load->view('partials/footer'); ?>