<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
<<<<<<< HEAD
                    <a href="<?= base_url('Dokumentasi') ?>" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
=======
                    <a href="<?= base_url('Keuangan') ?>" class="nav-link text-body p-0" onclick="javascripst: return confirm('Anda yakin ingin keluar?')">
>>>>>>> 284da5eb499cb1b9e2567199f573c0a40ceb7a0e
                        <i class="ni ni-button-power me-sm-1"></i>
                        <span class="d-sm-inline d-none">Keluar</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php if (!empty($success_msg)) { ?>
    <?php echo $success_msg; ?>
    <?php if (!empty($error_msg)) { ?>
        <?php echo $error_msg; ?>
    <?php } ?>
<?php } ?>