<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="<?= base_url('') ?>" target="_blank">
            <h2 class="ms-1 font-weight-bold mb-2">Si - Genta</h2>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="<?= base_url('') ?>">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-white"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="<?= base_url('AgendaKegiatan') ?>">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Agenda Kegiatan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="<?= base_url('DataIsu') ?>">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-notification-70 text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Tiap Isu</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Keuangan') ?>">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Berkas Keuangan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('SuratMasuk') ?>">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-email-83 text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Surat Masuk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('SuratKeluar') ?>">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bullet-list-67 text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Surat Keluar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('NotaDinas') ?>">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Nota Dinas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Dokumentasi') ?>">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-album-2 text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dokumentasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('BerkasLainLain') ?>">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-books text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Berkas Lain Lain</span>
                </a>
            </li>
            <?php if ($this->session->userdata('role') == 0) { ?>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Info Admin</h6>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('NewUpdate') ?>">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-archive-2 text-dark"></i>
                        </div>
                        <span class="nav-link-text ms-1">New Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('BeritaHighlight') ?>">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-active-40 text-dark"></i>
                        </div>
                        <span class="nav-link-text ms-1">Berita Highlight</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('AnggaranBiaya') ?>">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-chart-bar-32 text-dark"></i>
                        </div>
                        <span class="nav-link-text ms-1">Anggaran Biaya</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('KelolaAkun') ?>">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-circle-08 text-dark"></i>
                        </div>
                        <span class="nav-link-text ms-1">Kelola Akun</span>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
        <a class="btn bg-gradient-primary mt-4 w-100" href="<?= base_url('Login/logout') ?>" onclick="javascripst: return confirm('Anda yakin ingin keluar?')" type="button">Keluar</a>
    </div>
</aside>