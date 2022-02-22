<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="#" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
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