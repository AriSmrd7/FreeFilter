<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Filter4U - Downloads</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url('assets/img/favicon.png')?>" rel="icon">
  <link href="<?=base_url('assets/img/apple-touch-icon.png')?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url('assets/vendor/aos/aos.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/vendor/glightbox/css/glightbox.min.css')?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Avilon - v4.3.0
  * Template URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <?= $this->include('pages/header2') ?>
  <!-- End Header --><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Download</h2>
          <ol>
            <li><a href="<?=base_url()?>">Home</a></li>
            <li>Download</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <div class="card">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs pull-right" role="tablist">
            <?php
             $no = 1;
             foreach ($kategori_ig as $r):
              $idkat = $r->IdKategori;
            ?>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-<?=$idkat;?>"><?= $r->NamaKategori; ?></a>
              </li>
            <?php
            endforeach
            ?>
            </ul>
          </div>
          <div class="card-body">
          <?php
          $no = 1;
             foreach ($filter_ig as $row):
              $id = $row->IdKategori;
            ?>
            <div class="tab-content">
                <div class="tab-pane fade" id="#tab-<?=$id;?>" role="tabpanel">
                  <h5 class="card-title"><?= $row->NamaFilter; ?></h5>
                    <p class="card-text"><?= $row->DescFilter; ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <?php
              endforeach
            ?>
           </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
  <br><br><br><br><br>
  <!-- ======= Footer ======= -->
  <?= $this->include('pages/footer') ?>
  <!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=base_url('assets/vendor/aos/aos.js')?>"></script>
  <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?=base_url('assets/vendor/glightbox/js/glightbox.min.js')?>"></script>
  <script src="<?=base_url('assets/vendor/php-email-form/validate.js')?>"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url('assets/js/main.js')?>"></script>
  <script src="<?=base_url('assets/js/app.js')?>"></script>

</body>

</html>