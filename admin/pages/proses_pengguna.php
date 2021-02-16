<?php
include "../../koneksi/koneksi.php";
//Proses Tambah Petugas
if (isset($_POST['tmb_pengguna'])) {
  $id_pengguna = $_POST['id_pengguna'];
  $password = $_POST['password'];
  $nama = $_POST['nama'];
  $id_level = $_POST['id_level'];
  //INSERT QUERY START
  $query = "insert into tbl_pengguna
values('$id_pengguna','$password','$nama','$id_level')";
  $sql = mysqli_query($connect, $query);
  if ($sql) { ?>
    <script language="JavaScript">
      alert('Data berhasil ditambahkan');
      document.location = "../index.php?page=pengguna";
    </script>
  <?php
  } else { ?>
    <script language="JavaScript">
      alert('Data gagal ditambahkan, silakan cek kembali ');
      window.history.go(-1);
    </script>
  <?php
  }
}
//Proses Ubah
else if (isset($_POST['ubh_pengguna'])) {
  $id_pengguna = $_POST['id_pengguna'];
  $password = $_POST['password'];
  $nama = $_POST['nama'];
  $id_level = $_POST['id_level'];

  //Proses Ubah
  $query = "UPDATE `tbl_pengguna` SET `password` =
'$password', `nama` = '$nama', `id_level` = '$id_level'
WHERE `tbl_pengguna`.`id_pengguna` = '$id_pengguna';";
  $sql = mysqli_query($connect, $query);
  if ($sql) { ?>
    <script language="JavaScript">
      alert('Data berhasil diubah');
      document.location = "../index.php?page=pengguna";
    </script>
  <?php
  } else { ?>
    <script language="JavaScript">
      alert('Data gagal diubah, silakan cek kembali ');
      window.history.go(-1);
    </script>
  <?php
  }
}
//Proses Hapus
else if ($_GET['id']) {
  $id = $_GET['id'];
  //DELETE QUERY START
  $query = "DELETE FROM tbl_pengguna WHERE
id_pengguna='$id'";
  $sql = mysqli_query($connect, $query);
  if ($sql) { ?>
    <script language="JavaScript">
      document.location = "../index.php?page=pengguna";
    </script>
  <?php
  } else { ?>
    <script language="JavaScript">
      alert('Data gagal dihapus, ulangi kembali ');
      window.history.go(-1);
    </script>
<?php
  }
  exit;
}
?>