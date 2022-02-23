<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
            <div class="dropdown">
                <a href="#" class="btn bg-gradient-dark dropdown-toggle " data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
                    <i class="ni ni-circle-08 me-sm-1"></i><span class="d-sm-inline d-none"><?= $this->session->userdata('nama') ?></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                    <li>
                        <a class="dropdown-item" href="<?= base_url('KelolaAkun/profile') ?>">
                            <i class="ni ni-ui-04 me-sm-1"></i>
                            <span class="d-sm-inline d-none">Setting</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?= base_url('Login/logout') ?>" onclick="javascripst: return confirm('Anda yakin ingin keluar?')">
                            <i class="ni ni-button-power me-sm-1 text-danger"></i>
                            <span class="d-sm-inline d-none text-danger">Keluar</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>