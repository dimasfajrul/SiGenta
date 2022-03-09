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
                            <h6>Data Nota Dinas</h6>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select name="cari1" id="cari1" class="form-control">
                                                <option value="">Cari</option>
                                                <option value="Garam">Garam</option>
                                                <option value="Marine Bioproduct">Marine Bioproduct</option>
                                                <option value="Kontainer Berpendingin">Kontainer Berpendingin</option>
                                                <option value="Produk Olahan KP">Produk Olahan KP</option>
                                                <option value="Indonesia-Korea">Indonesia-Korea</option>
                                                <option value="Kincir Air">Kincir Air</option>
                                                <option value="Lain-Lain">Lain-Lain</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <button class="btn btn-icon btn-primary" type="submit">
                                                <span class="btn-inner--text">Cari</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body pt-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tujuan</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Isu</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Berkas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($search)) {
                                            $no = 1;
                                            foreach ($search as $data) { ?>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2">
                                                            <?= $no ?>
                                                        </div>
                                                    </td>
                                                    <td class="text-sm font-weight-bold mb-0"><?= $data['tujuan'] ?></td>
                                                    <td class="text-sm font-weight-bold mb-0"><?= date('d F Y', strtotime($data['tanggal'])) ?></td>
                                                    <td class="text-sm font-weight-bold mb-0"><?= $data['isu'] ?></td>
                                                    <td class="align-middle">
                                                        <a href="<?= $data['link'] ?>" class="text-secondary font-weight-bold text-xs" target="_blank">
                                                            Lihat berkas
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
                        <div class="card-header pb-0">
                            <form action="" method="post">
                                <h6>Data Dokumentasi</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select name="cari2" id="cari2" class="form-control">
                                                <option value="">Cari</option>
                                                <option value="Garam">Garam</option>
                                                <option value="Marine Bioproduct">Marine Bioproduct</option>
                                                <option value="Kontainer Berpendingin">Kontainer Berpendingin</option>
                                                <option value="Produk Olahan KP">Produk Olahan KP</option>
                                                <option value="Indonesia-Korea">Indonesia-Korea</option>
                                                <option value="Kincir Air">Kincir Air</option>
                                                <option value="Lain-Lain">Lain-Lain</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <button class="btn btn-icon btn-primary" type="submit">
                                                <span class="btn-inner--text">Cari</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body pt-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul Dokumentasi</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kegiatan</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Isu</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Berkas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($search2)) {
                                            $no = 1;
                                            foreach ($search2 as $data) { ?>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2">
                                                            <?= $no ?>
                                                        </div>
                                                    </td>
                                                    <td class="text-sm font-weight-bold mb-0"><?= $data['judul'] ?></td>
                                                    <td class="text-sm font-weight-bold mb-0"><?= $data['kegiatan'] ?></td>
                                                    <td class="text-sm font-weight-bold mb-0"><?= $data['isu'] ?></td>
                                                    <td class="align-middle">
                                                        <a href="<?= $data['link'] ?>" class="text-secondary font-weight-bold text-xs" target="_blank">
                                                            Lihat berkas
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