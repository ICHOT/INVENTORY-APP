<?php
include "../koneksi/koneksi.php";
$id_pengguna = $_POST['id_pengguna'];
$password = $_POST['password'];
/*proses login */
$login = mysqli_query($connect, "SELECT * FROM
tbl_pengguna WHERE id_pengguna = '$id_pengguna' AND
password='$password'");
$row = mysqli_fetch_array($login);
if (
  $row['id_pengguna'] == $id_pengguna and
  $row['password'] == $password and
  $row['id_level'] == "L0001"
) {
  session_start();
  $_SESSION['id_pengguna'] = $row['id_pengguna'];
  $_SESSION['password'] = $row['password'];
  $_SESSION['nama'] = $row['nama'];
  $_SESSION['id_level'] = $row['id_level'];
?>
  <script language="JavaScript">
    alert('Anda Login Sebagai Admin');
    document.location = "../admin/";
  </script>
<?php
} else if (
  $row['id_pengguna'] == $id_pengguna and
  $row['password'] == $password and
  $row['id_level'] == "L0002"
) {
  session_start();
  $_SESSION['id_pengguna'] = $row['id_pengguna'];
  $_SESSION['password'] = $row['password'];
  $_SESSION['nama'] = $row['nama'];
  $_SESSION['id_level'] = $row['id_level'];
?>
  <script language="JavaScript">
    alert('Anda Login Sebagai User');
    document.location = "../user/";
  </script>
<?php
}
/*proses login end */
?>