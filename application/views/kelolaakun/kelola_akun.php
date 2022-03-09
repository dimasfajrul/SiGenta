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
            <?php } ?>
            <?php if (!empty($error_msg)) { ?>
                <?php echo $error_msg; ?>
            <?php } ?>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-8">
                                    <h6>Kelola Akun</h6>
                                    <a href="<?= base_url('KelolaAkun/tambah') ?>" class="btn btn-primary" type="button">Tambah akun</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Bergabung</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Diperbaharui</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($user)) {
                                            $no = 1;
                                            foreach ($user as $data) { ?>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2">
                                                            <?= $no ?>
                                                        </div>
                                                    </td>
                                                    <td class="text-sm font-weight-bold mb-0"><?= $data->nama ?></td>
                                                    <td class="text-sm font-weight-bold mb-0"><?= $data->email ?></td>
                                                    <td class="text-sm font-weight-bold mb-0">
                                                        <?php
                                                        if ($data->role == 0) {
                                                            echo '<span class="badge bg-gradient-success">Admin</span>';
                                                        } else {
                                                            echo '<span class="badge bg-gradient-secondary">User</span>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td class="text-sm font-weight-bold mb-0"><?= $data->created_at ?></td>
                                                    <td class="text-sm font-weight-bold mb-0"><?= $data->updated_at ?></td>
                                                    <td class="text-sm font-weight-bold mb-0">
                                                        <?php
                                                        if ($data->status == 0) {
                                                            echo '<span class="badge bg-gradient-danger">Non - Aktif</span>';
                                                        } else {
                                                            echo '<span class="badge bg-gradient-info">Aktif</span>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="<?= base_url('KelolaAkun/detail/' . $data->id) ?>" class="text-info font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php $no++;
                                            } ?>
                                        <?php } else { ?>
                                            <tr>
                                                <td colspan="7">No data(s) found...</td>
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