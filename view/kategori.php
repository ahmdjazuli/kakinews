<?php require('head.php'); hal('Data Kategori'); error_reporting(0);
$action = isset($_GET['action']) ? $_GET['action'] : ''; 
switch($action){ default:
$query = mysqli_query($kon, "SELECT * FROM kategori ORDER BY idkategori DESC"); ?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
          <form name="table" method="POST">
            <table id="table" class="table table-bordered table-hover">
              <thead class="table-dark">
                <tr class="text-center">
                  <th>No</th>
                  <th>Nama Kategori</th>
                  <th class="knsdkvbgvr"></th>
                </tr>
              </thead>
              <tbody>
              <?php $no = 1;
                while($j = mysqli_fetch_array($query)){ ?>
                  <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $j['kategorinya'] ?></td>           
                    <td><?php
                        zeroOne("?action=ubah&idkategori=$j[idkategori]"); 
                        zeroTwo("$j[idkategori]","idkategori=$j[idkategori]");
                    ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php break;
case "tambah": ?>
<section class="content">
<form action="action.php?tabel=kategori&action=tambah" method="POST">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategorinya" class="form-control" required>
            </div>
          </div>
          <?php akuSukaDia(); ?>
        </div>
      </div>
    </div>
  </div>
</form>
</section>
<?php break;
case "ubah":
$idkategori = $_GET['idkategori'];
$query = mysqli_query($kon, "SELECT * FROM kategori WHERE idkategori = '$idkategori'");
$j = mysqli_fetch_array($query); ?>
<section class="content">
<form action="action.php?tabel=kategori&action=ubah&idkategori=<?=$idkategori?>" method="POST">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategorinya" value="<?= $j['kategorinya'] ?>" class="form-control" required>
            </div>
          </div>
          <?php akuSukaDia(); ?>
        </div>
      </div>
    </div>
  </div>
</form>
</section>
<?php break; } require('foot.php'); ?>