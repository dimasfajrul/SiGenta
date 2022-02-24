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
                                    <h6>Berita Highlight</h6>
                                    <?php if ($this->session->userdata('role') == 0) { ?>
                                        <a href="<?= base_url('Berita_Highlight/edit') ?>" class="btn btn-primary" type="button">Edit Berita Highlight</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul Berita</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Link Berita</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($uang)) {
                                            $no = 1;
                                            foreach ($uang as $data) { ?>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2">
                                                            <?= $no ?>
                                                        </div>
                                                    </td>
                                                    <td class="text-sm font-weight-bold mb-0"><?= $data->judulberita ?></td>
                                                    <td class="text-sm font-weight-bold mb-0"><?= $data->deskripsi ?></td>
                                                    <td class="align-middle">
                                                        <a href="<?= $data->link ?>" class="text-secondary font-weight-bold text-xs" target="_blank">
                                                            Lihat berita
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