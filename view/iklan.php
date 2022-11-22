<?php require('head.php'); hal('Iklan');
$action = isset($_GET['action']) ? $_GET['action'] : ''; 
switch($action){ default:
$query = mysqli_query($kon, "SELECT * FROM iklan ORDER BY idiklan DESC"); ?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
          <form name="table" method="POST">
            <table id="table" class="table table-bordered table-hover">
              <thead class="bg-black">
                <tr class="text-center">
                  <th>No</th>
                  <th>Foto Iklan</th>
                  <th class="knsdkvbgvr"></th>
                </tr>
              </thead>
              <tbody>
              <?php $no = 1;
                while($j = mysqli_fetch_array($query)){ ?>
                  <tr class="text-center">
                    <td><?= $no++ ?></td>  
                    <td><a target="_blank" href="../<?= $j['foto'] ?>"><img src="../<?= $j['foto'] ?>" width='250px'></a></td>                     
                    <td><?php 
                        zeroOne("?action=ubah&idiklan=$j[idiklan]"); 
                        zeroTwo("$j[idiklan]","idiklan=$j[idiklan]");
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
<form action="action.php?tabel=iklan&action=tambah" method="POST" autocomplete="off" enctype="multipart/form-data">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputFile">Foto Iklan</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="file1" class="custom-file-input" id="exampleInputFile" accept="image/*" required>
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="">Upload</span>
                </div>
              </div>
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
$idiklan = $_GET['idiklan'];
$query = mysqli_query($kon, "SELECT * FROM iklan WHERE idiklan = '$idiklan'");
$j = mysqli_fetch_array($query); ?>
<section class="content">
<form action="action.php?tabel=iklan&action=ubah&idiklan=<?=$idiklan?>" method="POST" enctype="multipart/form-data">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputFile">Foto Iklan</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="file1" class="custom-file-input" id="exampleInputFile" accept="image/*">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <input type="hidden" name="fileLama" value="<?= $j['foto'] ?>">
                  <span class="input-group-text" id="">Upload</span>
                </div>
              </div>
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