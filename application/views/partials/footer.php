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
    // anychart.onDocumentReady(function() {

    //     // set the data
    //     var data = [{
    //             x: "White",
    //             value: 223553265
    //         },
    //         {
    //             x: "Black or African American",
    //             value: 38929319
    //         },
    //         {
    //             x: "American Indian and Alaska Native",
    //             value: 2932248
    //         },
    //         {
    //             x: "Asian",
    //             value: 14674252
    //         },
    //         {
    //             x: "Native Hawaiian and Other Pacific Islander",
    //             value: 540013
    //         },
    //         {
    //             x: "Some Other Race",
    //             value: 19107368
    //         },
    //         {
    //             x: "Two or More Races",
    //             value: 9009073
    //         }
    //     ];

    //     // create the chart
    //     var chart = anychart.pie();

    //     // set the chart title
    //     chart.title("Population by Race for the United States: 2010 Census");

    //     // add the data
    //     chart.data(data);

    //     // display the chart in the container
    //     chart.container('chart');
    //     chart.draw();

    // });
</script>
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
</body>

</html>