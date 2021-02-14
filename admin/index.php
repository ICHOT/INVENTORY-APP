<?php
include 'header.php';
if (isset($_get['page'])) {
  switch ($_get['page']) {
    case 'beranda':
      include 'pages/beranda.php';
      break;

    case 'pengguna':
      include 'pages/dt_pengguna.php';
      break;
    case 'tmb_pengguna':
      include 'pages/tmb_pengguna.php';
      break;
    case 'ubh_pengguna':
      include 'pages/ubh_pengguna.php';
      break;



    case 'inventaris':
      include 'pages/dt_inventaris.php';
      break;
    case 'tmb_inventaris':
      include 'pages/tmb_inventaris.php';
      break;
    case 'ubh_inventaris':
      include 'pages/ubh_inventaris.php';
      break;
    case 'detail_inventaris':
      include 'pages/detail_inventaris.php';
      break;



    case 'peminjaman':
      include 'pages/peminjaman.php';
      break;
    case 'inp_peminjaman':
      include 'pages/input_peminjaman.php';
      break;
    case 'peminjaman':
      include 'pages/detail_peminjamanan.php';
      break;

    default:
      include 'pages/404.php';
  }
} else {
  include 'pages/beranda.php';
}
include 'footer.php';
