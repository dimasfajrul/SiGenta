<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="<?= base_url('Login/logout') ?>" class="nav-link text-body p-0" onclick="javascripst: return confirm('Anda yakin ingin keluar?')">
                        <i class="ni ni-button-power me-sm-1"></i>
                        <span class="d-sm-inline d-none">Keluar</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>