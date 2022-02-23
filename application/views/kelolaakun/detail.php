<?php $this->load->view('partials/header'); ?>

<body class="g-sidenav-show  bg-gray-100">
    <?php $this->load->view('partials/sidebar'); ?>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <?php $this->load->view('partials/navbar'); ?>
        <!-- End Navbar -->
        <form action="" method="POST">
            <div class="container-fluid mt--6">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card bg-white">
                            <div class="card-header bg-transparent">
                                <button class="btn btn-icon btn-info" type="submit" name="aktif" id="aktif">
                                    <span class="btn-inner--text">Aktif</span>
                                </button>
                                <button class="btn btn-outline-danger" type="submit" name="mati" id="mati">
                                    <span class="btn-inner--text">Non - Aktif</span>
                                </button>
                                <div class="row align-items-center">
                                    <div class="col">
                                        <?php foreach ($user as $user) { ?>
                                            <div class="row">
                                                <div class="my-auto col-sm-2">
                                                    <p>Nama Lengkap:</p>
                                                </div>
                                                <div class="my-auto col-sm-9">
                                                    <p><?= $user->nama; ?></p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="my-auto col-sm-2">
                                                    <p>Email:</p>
                                                </div>
                                                <div class="my-auto col-sm-9">
                                                    <p><?= $user->email; ?></p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="my-auto col-sm-2">
                                                    <p>Status:</p>
                                                </div>
                                                <div class="my-auto col-sm-9">
                                                    <p><?php
                                                        if ($user->status == 0) {
                                                            echo '<span class="badge bg-gradient-danger">Non - Aktif</span>';
                                                        } elseif ($user->status == 1) {
                                                            echo '<span class="badge bg-gradient-success">Aktif</span>';
                                                        }
                                                        ?></p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="my-auto col-sm-2">
                                                    <p>Level:</p>
                                                </div>
                                                <div class="my-auto col-sm-9">
                                                    <p><?php
                                                        if ($user->role == 0) {
                                                            echo '<span class="badge bg-gradient-success">Admin</span>';
                                                        } elseif ($user->role == 1) {
                                                            echo '<span class="badge bg-gradient-secondary">User</span>';
                                                        }
                                                        ?></p>
                                                </div>
                                            </div>
                                            <a href="<?= base_url("KelolaAkun") ?>" class="btn btn-icon btn-danger" type="button" style="margin-bottom: 0px">
                                                <span class="btn-inner--text">Kembali</span>
                                            </a>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php $this->load->view('partials/footer'); ?>
        </form