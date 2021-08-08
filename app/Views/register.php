<?php
		
    // Ambil data dari session
    if (isset($_SESSION['seve_nama_kegiatan'])) {
     $seve_nama_kegiatan = $_SESSION['seve_nama_kegiatan'];
    }
    if (isset($_SESSION['seve_anggaran'])) {
     $seve_anggaran = $_SESSION['seve_anggaran'];
    }
    if (isset($_SESSION['jenis_biaya'])) {
     $jenis_biaya = $_SESSION['jenis_biaya'];
      }
      if (isset($_SESSION['keterangan'])) {
     $keterangan = $_SESSION['keterangan'];
      }
      if (isset($_SESSION['jenis_kpi'])) {
     $jenis_kpi = $_SESSION['jenis_kpi'];
      }
      if (isset($_SESSION['jenis_anggaran'])) {
     $jenis_anggaran = $_SESSION['jenis_anggaran'];
      }
    // End ambil data dari session
   
    // Tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
    $seve_nama_kegiatan[] = $_POST['nama_kegiatan'];
    $seve_anggaran[] = $_POST['anggaran'];
    $seve_jenis_biaya[] = $_POST['jenis_biaya'];
    $seve_keterangan[] = $_POST['keterangan'];
    $seve_jenis_kpi[] = $_POST['jenis_kpi'];
    $seve_jenis_anggaran[] = $_POST['jenis_anggaran'];
    // End script tambah ke array
   
    // Simpan data array yang baru ke session
    $_SESSION['nama_kegiatan'] = $nama_kegiatan;
    $_SESSION['anggaran'] = $anggaran;
    $_SESSION['jenis_biaya'] = $jenis_biaya;
    $_SESSION['keterangan'] = $keterangan;
    $_SESSION['jenis_kpi'] = $jenis_kpi;
    $_SESSION['jenis_anggaran'] = $jenis_anggaran;
    // End script simpan ke session
   ?>