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
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Data Tiap Isu</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            <?= $isu ?>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Surat Keluar</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            <?= $suratkeluar ?>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Surat Masuk</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            <?= $suratmasuk ?>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Nota Dinas</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            <?= $notadinas ?>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-7 mb-lg-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column h-100">
                                        <p class="mb-1 pt-2 text-bold">Si-Genta</p>
                                        <h5 class="font-weight-bolder">Apa Itu Web Si-Genta ?</h5>
                                        <p class="mb-5"> Si-Genta merupakan sebuah sistem manajemen dan pengetahuan </p>
                                    </div>
                                </div>
                                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                                    <div class="bg-gradient-primary border-radius-lg h-100">
                                        <img src="<?= base_url('') ?>assets/img/shapes/waves-white.svg" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                                        <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                            <img class="w-100 position-relative z-index-2 pt-4" src="<?= base_url('') ?>assets/img/illustrations/rocket-white.png" alt="rocket">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card h-100 p-3">
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('<?= base_url('') ?>assets/img/ivancik.jpg');">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                <h5 class="text-white font-weight-bolder mb-4 pt-2"><?= $pin[0]->judul ?></h5>
                                <p class="text-white"><?= $pin[0]->deskripsi ?>.</p>
                                <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="<?= $pin[0]->link ?>" target="_blank">
                                    Read More
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h6>Agenda Kegiatan</h6>
                                </div>
                                <div class="col-sm-2">
                                    <a href="<?= base_url('AgendaKegiatan') ?>" class="btn btn-outline-primary btn-sm" type="button">detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="timeline timeline-one-side">
                                <?php foreach ($agenda as $data) { ?>
                                    <div class="timeline-block mb-3">
                                        <span class="timeline-step">
                                            <i class="ni ni-<?= $data->icon ?>"></i>
                                        </span>
                                        <div class="timeline-content">
                                            <h6 class="text-dark text-sm font-weight-bold mb-0"><?= $data->agenda ?></h6>
                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?= date('d F Y', strtotime($data->tanggal)) . ', ' . $data->waktu ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card z-index-2">
                        <div class="card-header pb-0">
                            <h6>Realisasi Anggaran</h6>
                            <p class="text-sm">
                                <i class="fa fa-arrow-up text-success"></i>
                                <span class="font-weight-bold">Anggaran tahun</span> <?= $anggaran[0]->tahun ?>
                            </p>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body p-3">
                                <div id="container">
                                    <div id="chart" class="chart-canvas" height="300px">
                                        <canvas class="canvas-pie" id="grafik" width="100%" height="50" style="position: relative; width: 100%; height: 360px"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>New Update</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tautan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($berita)) {
                                        $no = 1;
                                        foreach ($berita as $data) { ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2">
                                                        <?= $no ?>
                                                    </div>
                                                </td>
                                                <td class="text-sm font-weight-bold mb-0"><?= substr($data->judul, 0, 50) . '...' ?></td>
                                                <td class="align-middle">
                                                    <a href="<?= $data->link ?>" class="btn btn-primary" type="button" target="_blank">
                                                        Lihat berita
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php $no++;
                                        } ?>
                                    <?php } else { ?>
                                        <tr>
                                            <td colspan="3">No data(s) found...</td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            <?= '© ' . date('Y') . ' ' . SITE_NAME  ?>
                            | Designed by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://andrea.devliffe.com" class="nav-link text-muted" target="_blank">About Developer</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!--   Core JS Files   -->
        <script src="<?= base_url('') ?>assets/js/core/popper.min.js"></script>
        <script src="<?= base_url('') ?>assets/js/core/bootstrap.min.js"></script>
        <script src="<?= base_url('') ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="<?= base_url('') ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script src="<?= base_url('') ?>assets/js/plugins/chartjs.min.js"></script>

        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="<?= base_url('') ?>assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
        <script>
            var ctx = document.getElementById('grafik');
            var cData1 = JSON.parse(`<?php echo $pie; ?>`);
            console.log(cData1.nama);
            var myPieChart = new Chart(ctx, {
                type: "pie",
                data: {
                    labels: cData1.nama,
                    datasets: [{
                        data: cData1.jumlah,
                        backgroundColor: [
                            "#e81500", //danger
                            "#f4a100", //warning
                            "#0061f2", //blue
                            "#00ac69", //success
                            "#6900c7", //secondary
                            "#00cfd5", //info
                            "#e30059", //pink
                            "#00ba94", //teal
                            "#f76400", //orange
                            "#5800e8", //indigo
                        ]
                    }]
                },
                options: {
                    resizeable: true,
                    responsive: true,
                    maintainAspectRatio: false,
                    tooltips: {
                        enabled: false,
                    },
                    legend: {
                        display: false
                    },
                    zoomOutPercentage: 100,
                    layout: {
                        padding: {
                            left: 10,
                            right: 10,
                            top: 70,
                            bottom: 50
                        }
                    },
                    plugins: {
                        datalabels: {
                            formatter: (value, ctx) => {
                                let sum = 0;
                                let dataArr = ctx.chart.data.datasets[0].data;
                                dataArr.map(data => {
                                    sum += data;
                                });
                                let percentage = (value * 100 / sum).toFixed(2) + "%";
                                return percentage;
                            },
                            color: '#fff',
                        },
                        legend: false,
                        outlabels: {
                            text: '%l %p',
                            color: 'white',
                            stretch: 20,
                            font: {
                                resizable: true,
                                minSize: 12,
                                maxSize: 16
                            }
                        }
                    },
                    cutoutPercentage: 0
                }
            });

            //     // set the data
            var data = [];
            // 
        </script>
        <!-- <script>
            anychart.onDocumentReady(function() {

                // set the data
                var cData1 = JSON.parse(`<?php echo $pie; ?>`);
                console.log(cData1.nama);
                
                var data = [{

                        x: cData1.nama,
                        value: cData1.jumlah
                    },

                ];

                // create the chart
                var chart = anychart.pie();

                // set the chart title
                chart.title("Population by Race for the United States: 2010 Census");

                // add the data
                chart.data(data);

                // display the chart in the container
                chart.container('chart');
                chart.draw();

            });
        </script> -->

</body>

</html>