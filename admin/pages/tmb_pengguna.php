<?php
//Auto Number
$query = "SELECT max(id_pengguna) as maxKode FROM
tbl_pengguna";
$hasil = mysqli_query($connect, $query);
$data = mysqli_fetch_array($hasil);
$kode = $data['maxKode'];
$noUrut = (int) substr($kode, 4, 4);
$noUrut++;
$char = "P";
$newID = $char . sprintf("%04s", $noUrut);
//Substring
?>
<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>Form</strong> Tambah
      Pengguna
    </div>
    <div class="card-body cardblock">
      <form action="proses/proses_pengguna.php" method="post" enctype="multipart/form-data" class="form-horizontal">

        <div class="row form-group">
          <div class="col col-md3"><label for="text-input" class=" form-controllabel">ID Pengguna</label></div>
          <div class="col-12 col-md9"><input type="text" id="text-input" value="<?php echo
                                                                                $newID; ?>" readonly name="id_pengguna" class="formcontrol"></div>
        </div>
        <div class="row form-group">
          <div class="col col-md3"><label for="text-input" class=" form-controllabel">Nama</label></div>
          <div class="col-12 col-md9"><input type="text" id="text-input" name="nama" placeholder="Masukkan Nama Petugas" class="formcontrol" required=""></div>
        </div>
        <div class="row form-group">
          <div class="col col-md3"><label for="select" class=" form-controllabel">Akses</label></div>
          <div class="col-12 col-md9">
            <select name="id_level" id="select" rows="9" class="form-control" required>
              <option values="">Pilih
                Akses</option>
              <?php
              $sql = "SELECT * FROM
tbl_level";

              $qry = mysqli_query($connect, $sql);

              while ($hsl = mysqli_fetch_array($qry)) {
                echo "<option
value='$hsl[id_level]'>$hsl[nama_level]</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="row form-group">
          <div class="col col-md3"><label for="text-input" class=" form-controllabel">Password</label></div>
          <div class="col-12 col-md9"><input type="password" id="text-input" name="password" placeholder="Masukkan Password" class="form-control" required=""></div>
        </div>
    </div>
    <div class="card-footer" align="center">
      <button type="submit" name="tmb_pengguna" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circleo"></i> Tambah
      </button>
      <button type="reset" class="btn
btn-danger btn-sm">

        <i class="fa fa-ban"></i> Reset
      </button>
    </div>
  </div>
  </form>
</div>