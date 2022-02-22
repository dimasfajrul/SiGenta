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
                                    <h6>Data Tiap Isu</h6>
                                    <a href="<?= base_url('DataIsu/tambah') ?>" class="btn btn-primary" type="button">Tambah Data</a>
                                </div>
                                <div class="col-2">
                                    <a href="" data-toggle="modal" data-target="#hapusModal" class="btn btn-outline-primary btn-sm mb-0 text-end">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Isu</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Berkas</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($isu)) {
                                            $no = 1;
                                            foreach ($isu as $data) { ?>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2">
                                                            <?= $no ?>
                                                        </div>
                                                    </td>
                                                    <td><?= $data->judul ?></td>
                                                    <td><?= $data->isu ?></td>
                                                    <td class="align-middle">
                                                        <a href="<?= $data->link ?>" class="text-secondary font-weight-bold text-xs" target="_blank">
                                                            Lihat berkas
                                                        </a>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="<?= base_url('DataIsu/edit/' . $data->id) ?>" class="text-info font-weight-bold text-xs">
                                                            Edit
                                                        </a>
                                                        |
                                                        <a href="<?= base_url('DataIsu/hapus/' . $data->id) ?>" class="text-danger font-weight-bold text-xs" type="button" onclick="javascripst: return confirm('Anda yakin menghapus data?')">
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
                    <div class="card mb-4">
                        <div class="card-body pt-4 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <a href="" type="button" class="btn btn-info">Data Kuantitatif</a>
                                                </div>
                                            </td>
                                            <td><a href="" type="button" class="btn btn-success">Data Kualitatif</a></td>
                                            <td><a href="" type="button" class="btn btn-danger">Olah Data Gambar</a></td>
                                            <td><a href="" type="button" class="btn btn-warning">Olah Data Video</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('partials/footer'); ?>
            <script type="text/javascript">
                function confirm_modal(delete_url) {
                    $('#deleteModal').modal('show', {
                        backdrop: 'static'
                    });
                    document.getElementById('delete_link').setAttribute('href', delete_url);
                }
            </script>