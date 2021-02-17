<?php
error_reporting(0);
include "../koneksi/koneksi.php";
session_start();
if (empty($_SESSION['id_pengguna'])) {
?>
  <script>
    alert("Silakan Login terlebih Dahulu");
    document.location = "../login/";
  </script>
<?php
}
$id_pengguna = $_SESSION['id_pengguna'];
$akses = "SELECT * FROM tbl_pengguna WHERE id_pengguna =
'$id_pengguna'";
$sql = mysqli_query($connect, $akses);
$row = mysqli_fetch_array($sql);
$akses1 = $row['id_level'];
if ($akses1 != "L0001") {
?>
  <script>
    alert("Anda Tidak Memiliki Hak Akses Untuk HalamanIni!");
    document.location = "../login/";
  </script>
<?php
}
?>
<!doctype html>
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--
<![endif]-->

<head>
  <!-- ////////////////// Validate ////////////////// -->
  <script language="javascript">
    function isNumberKey(evt) //Number
    {
      var charCode = (evt.which) ? evt.which : event.keyCode;
      console.log(charCode);
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
      return true;
    }

    function isUppercaseKey(evt) //Uppercase
    {
      var charCode = (evt.which) ? evt.which : event.keyCode;
      console.log(charCode);
      if (charCode > 31 && (charCode < 65 || charCode > 90))
        return false;
      return true;
    }

    function isLowercaseKey(evt) //Lowercase
    {
      var charCode = (evt.which) ? evt.which : event.keyCode;
      console.log(charCode);
      if (charCode > 31 && (charCode < 97 || charCode > 122))
        return false;
      return true;
    }

    function isAlphabetKey(evt) //Alphabet + spc
    {
      var charCode = (evt.which) ? evt.which : event.keyCode;
      console.log(charCode);
      if (charCode > 32 && (charCode < 97 || charCode > 122))
        return false;
      return true;
    }
  </script>
  <!-- ////////////////// End Validate ////////////////// -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Inventory SMK Letris Indonesia 2</title>
  <meta name="description" content="Sufee Admin - HTML5 Admin
Template">
  <meta name="viewport" content="width=device-width, initialscale=1">
  <link rel="apple-touch-icon" href="apple-icon.png">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="../assets/css/normalize.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="../assets/css/themifyicons.css">
  <link rel="stylesheet" href="../assets/css/flagicon.min.css">
  <link rel="stylesheet" href="../assets/css/cs-skinelastic.css">
  <link rel="stylesheet" href="../assets/css/lib/datatable/dataTables.bootstrap.min.css">
  <!-- <link rel="stylesheet" href="assets/css/bootstrapselect.less"> -->
  <link rel="stylesheet" href="../assets/scss/style.css">
  <link href="../assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,
700,800' rel='stylesheet' type='text/css'>
  <!-- <script type="text/javascript"
src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js">
</script> -->
</head>

<body>
  <!-- Left Panel -->
  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" ariacontrols="main-menu" aria-expanded="false" aria-label="Toggle
navigation">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="./"><img src="images/user.png" width="50%" alt="Logo"></a>
        <a class="navbar-brand hidden" href="./"><img src="images/user.png" alt="Logo"></a>
      </div>

      <div id="main-menu" class="main-menu collapse
navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <h3 class="menu-title">Menu
              Beranda</h3><!-- /.menu-title -->
            <a href="index.php"> <i class="menu-icon
fa fa-dashboard"></i>Beranda </a>
          </li>
          <h3 class="menu-title">Menu Master</h3>
          <!--
/.menu-title -->

          <li class="menu-item-has-children dropdown
active">
            <a href="#" class="dropdown-toggle" datatoggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="menu-icon fa fath"></i>Pengguna</a>
            <ul class="sub-menu children dropdownmenu">
              <li><i class="fa fa-table"></i><a href="index.php?page=pengguna">Data Pengguna</a></li>

            </ul>
          </li>

          <li class="menu-item-has-children dropdown
active">
            <a href="#" class="dropdown-toggle" datatoggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="menu-icon fa fath"></i>Inventaris</a>
            <ul class="sub-menu children dropdownmenu">
              <li><i class="fa fa-table"></i><a href="index.php?page=inventaris">Data Inventaris</a></li>

            </ul>
          </li>

          <h3 class="menu-title">Menu Transaksi</h3>
          <!--
/.menu-title -->
          <li class="menu-item-has-children dropdown
active">
            <a href="#" class="dropdown-toggle" datatoggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="menu-icon fa fath"></i>Peminjaman</a>
            <ul class="sub-menu children dropdownmenu">
              <li><i class="fa fa-table"></i><a href="index.php?page=peminjaman">Data Peminjaman</a></li>
              <li><i class="fa fa-table"></i><a href="index.php?page=inp_peminjaman">Input Peminjaman</a></li>
            </ul>
          </li>

          <h3 class="menu-title"> Keluar</h3>
          <!--
/.menu-title -->
          <li class="active">
            <a href="logout.php"> <i class="menuicon fa fa-sign-out"></i>Logout </a>
          </li>

        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>
  </aside><!-- /#left-panel -->
  <!-- Left Panel -->
  <!-- Right Panel -->
  <div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">
      <div class="header-menu">
        <div class="col-sm-7">

          <div class="header-left">

          </div>
        </div>
        <div class="col-sm-7">
          <a id="menuToggle" class="menutoggle pullleft"><i class="fa fa fa-tasks"></i></a>

        </div>
        <div class="col-sm-5" align="right">
        </div>
      </div>
    </header><!-- /header -->
    <!-- Header-->