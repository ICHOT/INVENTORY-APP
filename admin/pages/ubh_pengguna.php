<?php
$id = $_GET['id'];
$query = "SELECT * FROM tbl_pengguna WHERE
id_pengguna='$id'";
$sql = mysqli_query($connect, $query);
$data = mysqli_fetch_array($sql);
?>
<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>Form</strong> Ubah
      Pengguna
    </div>
    <div class="card-body cardblock">
      <form action="proses/proses_pengguna.php" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="row form-group">
          <div class="col col-md3"><label for="text-input" class=" form-controllabel">ID Petugas</label></div>
          <div class="col-12 col-md9"><input type="text" id="text-input" readonly name="id_pengguna" value="<?php echo
                                                                                                            $data['id_pengguna'] ?>" class="form-control"></div>
        </div>
        <div class="row formgroup">
          <div class="col col-md3"><label for="text-input" class=" form-controllabel">Nama</label></div>
          <div class="col-12 col-md9"><input type="text" id="text-input" name="nama" value="<?php echo $data['nama'] ?>" placeholder="Masukkan Nama Petugas" class="formcontrol" required=""></div>
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
              $akses = $data['id_level'];
              $qry = mysqli_query($connect, $sql);

              while ($hsl = mysqli_fetch_array($qry)) {

                if ($akses == $hsl['id_level']) {

                  $select = "selected";
                } else {
                  $select = "";
                }
                echo "<option
value='$hsl[id_level]'
$select>$hsl[nama_level]</option>";
              }
              ?>

            </select>
          </div>
        </div>
        <div class="row form-group">
          <div class="col col-md3"><label for="text-input" class=" form-controllabel">Password</label></div>
          <div class="col-12 col-md9"><input type="password" id="text-input" name="password" placeholder="Masukkan Password" value="<?php echo $data['password'] ?>" class="formcontrol" required="" style="text-transform:
capitalize;"></div>
        </div>

    </div>
    <div class="card-footer" align="center">
      <button type="submit" name="ubh_pengguna" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circleo"></i> Ubah
      </button>
      <a href="index.php?page=pengguna" class="btn btn-danger
btn-sm">
        <i class="fa fa-ban"></i>
        Batal
      </a>
    </div>
  </div>
  </form>
</div>