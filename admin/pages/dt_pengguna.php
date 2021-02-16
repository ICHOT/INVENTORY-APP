<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>Data Pengguna</h1>
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="page-header float-right">

    </div>
  </div>
</div>
<!------------------------------->
<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">

            <a align="right" href="index.php?page=tmb_pengguna" class="btn btnprimary">Tambah</a>
            <a target="blank" align="right" href="pages/laporan_petugas.php" class="btn btn-danger"><i class="fa fa-print"></i>
              Cetak</a><br>

          </div>
          <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
              <thead>
                <tr align="center">
                  <th>No.</th>
                  <th>ID Petugas</th>
                  <th>Nama</th>
                  <th>Akses</th>
                  <th>Aksi <span class="tisettings"></span></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = "SELECT
 `tbl_pengguna`.`id_pengguna`,
 `tbl_pengguna`.`nama`,
 `tbl_level`.`nama_level`
 FROM
 `tbl_pengguna`
 INNER JOIN `tbl_level` ON `tbl_level`.`id_level` =
`tbl_pengguna`.`id_level`";
                $sql = mysqli_query($connect, $query);
                $no = 1;
                while ($data = mysqli_fetch_array($sql)) {
                  echo "<tr class='gradeA'>";
                  echo "<td><center><b>" . $no . "</b></td>";
                  echo
                  "<td><center>" . $data['id_pengguna'] . "</td>";
                  echo
                  "<td><center>" . $data['nama'] . "</center></td>";
                  echo
                  "<td><center>" . $data['nama_level'] . "</center></td>";
                  echo "<td><center>
<a class='btn btn-info '
href='index.php?page=ubh_pengguna&&id=" . $data['id_pengg
una'] . "'> <i class='fa fa-pencil-square-o'></i> </a>
";
                ?>
                  <a class="btn btn-warning" href="javascript: if (confirm('Apakah anda yakin ingin menghapus data?')) {window.location.href='proses/proses_pengguna.php?id=<?php echo $data['id_pengguna'];?>' } else { void('') };"><i class="fa fa-trash-o"></i></a>
                  </td>
                <?php
                  echo "</tr>";
                  $no++;
                }

                ?>



              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div><!-- .animated -->
</div><!-- .content -->