<!DOCTYPE html>
<html lang="en">

<head>
  <title>User SIMONEV UPJ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>/public/img/monev_logo.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <?= session()->getFlashdata('pesan'); ?>
  <nav class="navbar navbar-expand-sm bg-light justify-content-end">
    <ul class="nav ">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>auth/logout">LOGOUT</a>
      </li>
    </ul>
  </nav>
  <br>
  <div class="container">
    <div class="col">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="h3 font-weight-bold text-info text-uppercase mb-1">SELAMAT DATANG DI SIMONEV</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <a class="btn" href="<?php echo site_url(); ?>backend/rkat" role="button">
          <div class="card bg-info text-white">
            <img class="card-img-top" src="<?php echo base_url(); ?>/public/img/RKAT1.jpg" alt="Card image">
            <div class="card-body">RKAT</div>
          </div>
        </a>
      </div>
      <div class="col-sm-6">
        <a class="btn" href="<?php echo site_url(); ?>kpi" role="button">
          <div class="card bg-info text-white">
            <img class="card-img-top" src="<?php echo base_url(); ?>/public/img/KPI1.jpg" alt="Card image">
            <div class="card-body">KPI</div>
          </div>
        </a>
      </div>
    </div>
  </div>

</body>

</html>