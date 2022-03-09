<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('') ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url('') ?>assets/img/favicon.png">
  <title>
    Si - Genta | Login
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?= base_url('') ?>assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= base_url('') ?>assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?= base_url('') ?>assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url('') ?>assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <img src="<?= base_url('./assets/img/sigenta1.png') ?>" alt="Logo sigenta" width="300px">
                  <h3 class="font-weight-bolder text-info text-gradient">Selamat Datang</h3>
                  <p class="mb-0">Silahkan masukkan email dan password anda !</p>
                </div>
                <div class="card-body">
                  <?php if (!empty($success_msg)) { ?>
                    <?php echo $success_msg; ?>
                  <?php } ?>
                  <?php if (!empty($error_msg)) { ?>
                    <?php echo $error_msg; ?>
                  <?php } ?>
                  <form action="" method="POST">
                    <label>Email</label>
                    <div class="mb-3">
                      <input id="email" name="email" type="text" class="form-control" placeholder="nama" aria-label="text" aria-describedby="email-addon">
                      <?= form_error('email', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input id="password" name="password" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                      <?= form_error('password', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Masuk</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('<?= base_url('') ?>assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer py-5">
    <div class="row">
      <div class="col-8 mx-auto text-center mt-1">
        <p class="mb-0 text-secondary">
          <?= '© ' . date('Y') . ' ' . SITE_NAME  ?>
          | Designed by
          <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
        </p>
      </div>
    </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="<?= base_url('') ?>assets/js/core/popper.min.js"></script>
  <script src="<?= base_url('') ?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url('') ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url('') ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
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