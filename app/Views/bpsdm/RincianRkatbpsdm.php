<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>List Rkat</title>

  <!-- Custom fonts for this template-->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>/public/css/style_admin.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/public/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>/public/img/monev_logo.png" />
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <img src="<?php echo base_url(); ?>/public/img/monev_logo_putih.png" alt="Logo" style="width: 70px; height: 70px;">
        <div class="sidebar-brand-text mx-3">Rektorat</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link " href="<?= base_url('/rektorat') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>RKAT</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('/bpsdm/inputRencana') ?>">Input Rencana Anggaran</a>
            <a class="collapse-item" href="<?= base_url('/bpsdm/inputRealisasi') ?>">Input Realisasi Anggaran</a>
            <a class="collapse-item" href="<?= base_url('/bpsdm/listRkatbpsdm') ?>">Daftar Data RKAT</a>
            <a class="collapse-item" href="<?= base_url('/bpsdm/rincian') ?>">Rincian Rkat</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>KPI</span></a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('/rektorat/listcapaiankpi') ?>">Lihat Capaian</a>
            <a class="collapse-item" href="<?= base_url('/rektorat/tabelcapaiankpi') ?>">Lihat Data Tabel</a>
            <a class="collapse-item" href="<?= base_url('/rektorat/grafikcapaian') ?>">Lihat Data Grafik</a>
          </div>
        </div>
      </li>



    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - user Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  <?php
                  $nama_prodi = session('nama_prodi');
                  echo "$nama_prodi"
                  ?>
                </span>
              </a>
              <!-- Dropdown - user Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('/rektorat/form_ubahpass') ?>"><i class="fas fa-cog fa-sm fa-fw mr-2 text-gray-400"></i> Ubah Password</a>
                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Responsive tables Start -->
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Rincian RKAT
                </h4>
              </div>
              <!-- PK -->
              <?php $totalPkGenap = 0;
              foreach ($pk as $key => $value) : $totalPkGenap = $totalPkGenap + $value['anggaranGenap'];
              endforeach; ?>
              <?php $totalPkGanjil = 0;
              foreach ($pk as $key => $value) : $totalPkGanjil = $totalPkGanjil + $value['anggaranGanjil'];
              endforeach; ?>
              <?php $totalAnggaranPk = $totalPkGanjil + $totalPkGenap; ?>

              <?php $totalPkGanjilSerap = 0;
              foreach ($pk as $key => $value) : $totalPkGanjilSerap = $totalPkGanjilSerap + $value['serapGanjil'];
              endforeach; ?>
              <?php $totalPkGenapSerap = 0;
              foreach ($pk as $key => $value) : $totalPkGenapSerap = $totalPkGenapSerap + $value['serapGenap'];
              endforeach; ?>
              <?php $totalSerapPk = $totalPkGenapSerap + $totalPkGanjilSerap; ?>

              <?php $persenPk = $totalSerapPk / $totalAnggaranPk * 100; ?>
              <!-- OPS -->
              <?php $totalOpsGenap = 0;
              foreach ($ops as $key => $value) : $totalOpsGenap = $totalOpsGenap + $value['anggaranGenap'];
              endforeach; ?>
              <?php $totalOpsGanjil = 0;
              foreach ($ops as $key => $value) : $totalOpsGanjil = $totalOpsGanjil + $value['anggaranGanjil'];
              endforeach; ?>
              <?php $totalAnggaranOps = $totalOpsGanjil + $totalOpsGenap; ?>

              <?php $totalOpsGanjilSerap = 0;
              foreach ($ops as $key => $value) : $totalOpsGanjilSerap = $totalOpsGanjilSerap + $value['serapGanjil'];
              endforeach; ?>
              <?php $totalOpsGenapSerap = 0;
              foreach ($ops as $key => $value) : $totalOpsGenapSerap = $totalOpsGenapSerap + $value['serapGenap'];
              endforeach; ?>
              <?php $totalSerapOps = $totalOpsGenapSerap + $totalOpsGanjilSerap; ?>

              <?php $persenOps = $totalSerapOps / $totalAnggaranOps * 100; ?>

              <!-- Ops + PK -->
              <?php $totalAnggaranPkOps = $totalAnggaranPk + $totalAnggaranOps; ?>
              <?php $totalSerapPkOps = $totalSerapPk + $totalSerapOps; ?>

              <?php $persenPkOps = $totalSerapPkOps / $totalAnggaranPkOps * 100; ?>

              <!-- INV -->
              <?php $totalInvGenap = 0;
              foreach ($inv as $key => $value) : $totalInvGenap = $totalInvGenap + $value['anggaranGenap'];
              endforeach; ?>
              <?php $totalInvGanjil = 0;
              foreach ($inv as $key => $value) : $totalInvGanjil = $totalInvGanjil + $value['anggaranGanjil'];
              endforeach; ?>
              <?php $totalAnggaranInv = $totalInvGanjil + $totalInvGenap; ?>

              <?php $totalInvGanjilSerap = 0;
              foreach ($inv as $key => $value) : $totalInvGanjilSerap = $totalInvGanjilSerap + $value['serapGanjil'];
              endforeach; ?>
              <?php $totalInvGenapSerap = 0;
              foreach ($inv as $key => $value) : $totalInvGenapSerap = $totalInvGenapSerap + $value['serapGenap'];
              endforeach; ?>
              <?php $totalSerapInv = $totalInvGenapSerap + $totalInvGanjilSerap; ?>

              <?php $persenInv = $totalSerapInv / $totalAnggaranInv * 100; ?>
              <?= session()->getFlashdata('statusSimpan'); ?>
              <?= session()->getFlashdata('statusUpdate'); ?>
              <form action="<?= base_url('rektorat/saveRincian'); ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <?php foreach ($set_rkat as $key => $reading) : ?>
                    <input required type="hidden" name="id_user" value="<?= $reading['id_user']; ?>">
                    <input type="hidden" class="form-control" id="id_tahun" value="<?= $reading['id_tahun'] ?>" name="id_tahun" required>
                    <table class="table table-hover">
                      <tbody>
                        <tr>
                          <td>
                            <h5>PK</h5>
                          </td>
                        </tr>
                        <tr>
                          <td>Total Anggaran</td>
                          <td>:</td>
                          <td id='totalAnggaranPk' name='totalAnggaranPk'>RP. <?= $totalAnggaranPk ?></td>
                        </tr>
                        <tr>
                          <td>Total Realisasi</td>
                          <td>:</td>
                          <td id='totalSerapPk' name='totalSerapPk'>RP. <?= $totalSerapPk ?></td>
                        </tr>
                        <tr>
                          <td>Persentase (%)</td>
                          <td>:</td>
                          <td id='persenPk' name='persenPk'><input type="test" class="form-control" id="persenPk" value="<?= $persenPk ?>" name="persenPk" required></td>
                        </tr>
                        <tr>
                          <td>
                            <h5>OPS</h5>
                          </td>
                        </tr>
                        <tr>
                          <td>Total Anggaran</td>
                          <td>:</td>
                          <td id='totalAnggaranOps' name='totalAnggaranOps'>RP. <?= $totalAnggaranOps ?></td>
                        </tr>
                        <tr>
                          <td>Total Realisasi</td>
                          <td>:</td>
                          <td id='totalSerapOps' name='totalSerapOps'>RP. <?= $totalSerapOps ?></td>
                        </tr>
                        <tr>
                          <td>Persentase (%)</td>
                          <td>:</td>
                          <td id='persenOps' name='persenOps'><input type="test" class="form-control" id="persenOps" value="<?= $persenOps ?>" name="persenOps" required></td>
                        </tr>
                        <tr>
                          <td>
                            <h5>PK + OPS</h5>
                          </td>
                        </tr>
                        <tr>
                          <td>Total Anggaran</td>
                          <td>:</td>
                          <td id='totalAnggaranPkOps' name='totalAnggaranPkOps'>RP. <?= $totalAnggaranPkOps ?></td>
                        </tr>
                        <tr>
                          <td>Total Realisasi</td>
                          <td>:</td>
                          <td id='totalSerapPkOps' name='totalSerapPkOps'>RP. <?= $totalSerapPkOps ?></td>
                        </tr>
                        <tr>
                          <td>Persentase (%)</td>
                          <td>:</td>
                          <td id='persenPkOps' name='persenPkOps'><input type="test" class="form-control" id="persenPkOps" value="<?= $persenPkOps ?>" name="persenPkOps" required></td>
                        </tr>
                        <tr>
                          <td>
                            <h5>INV</h5>
                          </td>
                        </tr>
                        <tr>
                          <td>Total Anggaran</td>
                          <td>:</td>
                          <td id='totalAnggaranInv' name='totalAnggaranInv'>RP. <?= $totalAnggaranInv ?></td>
                        </tr>
                        <tr>
                          <td>Total Realisasi</td>
                          <td>:</td>
                          <td id='totalSerapInv' name='totalSerapInv'>RP. <?= $totalSerapInv ?></td>
                        </tr>
                        <tr>
                          <td>Persentase (%)</td>
                          <td>:</td>
                          <td id='persenInv' name='persenInv'><input type="test" class="form-control" id="persenInv" value="<?= $persenInv ?>" name="persenInv" required></td>
                        </tr>
                      </tbody>
                    </table>
                  <?php endforeach; ?>
                </div>
                <div class="card-footer" align="center">
                  <button type="submit" class="btn btn-primary" id="btnJumlah" value="submit" onclick="myFunction()">Simpan Data</button>
                  <span id="textError"></span>
                </div>
              </form>
            </div>
          </div>

        </div>


      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- JavaScript Libraries -->
    <script>
      var table = document.getElementById("nilai"),
        sumHsl = 0;
      for (var t = 0; t < table.rows.length; t++) {
        sumHsl = sumHsl + parseInt(table.rows[t].cells[5].getElementsByTagName('input')[0].value);
      }
      document.getElementById("totalanggaranganjil").innerHTML = sumHsl;
    </script>
    <script>
      var table = document.getElementById("nilai"),
        sumHsl = 0;
      for (var t = 0; t < table.rows.length; t++) {
        sumHsl = sumHsl + parseInt(table.rows[t].cells[8].getElementsByTagName('input')[0].value);
      }
      document.getElementById("totalanggarangenap").innerHTML = sumHsl;
    </script>
    <script>
      var table = document.getElementById("nilai"),
        sumHsl = 0;
      for (var t = 0; t < table.rows.length; t++) {
        sumHsl = sumHsl + parseInt(table.rows[t].cells[9].getElementsByTagName('input')[0].value);
      }
      document.getElementById("total").innerHTML = "Rp." + sumHsl;
    </script>
    <script>
      function AddInputs(clicked_id) {
        var totalGanjil = 0;
        var aGanjil = document.getElementById('totalanggaranganjil').innerHTML;

        var panjangDataSerapGanjil = document.querySelectorAll(".serapGanjil")
        // console.log(panjangDataSerapGanjil.length)
        for (let index = 1; index <= panjangDataSerapGanjil.length; index++) {
          var nilaiKolomGanjil = document.getElementById("serapGanjil" + index).value;
          totalGanjil += parseInt(nilaiKolomGanjil);
        }
        if (isNaN(totalGanjil)) {
          // console.log("Silahkan Isi Seluruh Kolom Data");
          var tampilTotalGanjil = document.getElementById("tampilTotalGanjil").innerHTML = "Silahkan Isi Seluruh Kolom Data";
        } else {
          console.log(totalGanjil);
          var tampilTotalGanjil = document.getElementById("tampilTotalGanjil").innerHTML = totalGanjil;

        }

        hitungGanjil = parseInt(totalGanjil) / parseInt(aGanjil) * 100;
        document.getElementById('persenSerapGanjil').value = hitungGanjil + "%";
        console.log(persenSerapGanjil);
      }

      function AddInputs2(clicked_id) {
        var totalGenap = 0;
        var aGenap = document.getElementById('totalanggarangenap').innerHTML;
        var panjangDataSerapGenap = document.querySelectorAll(".serapGenap")
        console.log(panjangDataSerapGenap.length)
        for (let index = 1; index <= panjangDataSerapGenap.length; index++) {
          var nilaiKolomGenap = document.getElementById("serapGenap" + index).value;
          totalGenap += parseInt(nilaiKolomGenap);
        }
        if (isNaN(totalGenap)) {
          console.log("Silahkan Isi Seluruh Kolom Data");
          var tampilTotalGenap = document.getElementById("tampilTotalGenap").innerHTML = "Silahkan Isi Seluruh Kolom Data";
        } else {
          console.log(totalGenap);
          var tampilTotalGenap = document.getElementById("tampilTotalGenap").innerHTML = totalGenap;
        }

        hitungGenap = parseInt(totalGenap) / parseInt(aGenap) * 100;
        document.getElementById('persenSerapGenap').value = hitungGenap + "%";
      }
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>/public/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/js/bootstrap.bundle.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>/public/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/js/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url(); ?>/public/js/datatables-demo.js"></script>

</body>

</html>