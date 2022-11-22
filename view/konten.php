<?php require('head.php'); hal('Konten');
$action = isset($_GET['action']) ? $_GET['action'] : ''; 
switch($action){ default:
$query = mysqli_query($kon, "SELECT * FROM konten JOIN user ON konten.id = user.id JOIN kategori ON konten.idkategori = kategori.idkategori ORDER BY idkonten DESC"); ?>
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
                  <th>Tanggal Publikasi (WITA)</th>
                  <th>Judul</th>
                  <th>Kategori</th>
                  <th>Konten</th>
                  <th>Thumbnail</th>
                  <th>Jumlah Dilihat</th>
                  <th class="knsdkvbgvr"></th>
                </tr>
              </thead>
              <tbody>
              <?php $no = 1;
                while($j = mysqli_fetch_array($query)){ ?>
                  <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= htw($j['waktu']); ?></td> 
                    <td><?= substr(strip_tags($j['judul']),0,30).'...'; ?></td>
                    <td><?= $j['kategorinya'] ?></td>
                    <td><?= substr(strip_tags($j['konten']),0,30).'...'; ?></td>      
                    <td><a target="_blank" href="../<?= $j['thumb'] ?>"><img src="../<?= $j['thumb'] ?>" width='60px'></a></td>            
                    <td><?= $j['view'] ?></td>           
                    <td><?php 
                        zeroOne("?action=ubah&idkonten=$j[idkonten]"); 
                        zeroTwo("$j[idkonten]","idkonten=$j[idkonten]");
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
<form action="action.php?tabel=konten&action=tambah" method="POST" autocomplete="off" enctype="multipart/form-data">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
                <label>Tanggal Publikasi (WITA)</label>
                <input type="datetime-local" name="waktu" value="<?= date('Y-m-d\TH:i') ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="idkategori" list="option" class="form-control" required>
                <datalist id="option">
                  <?php $q = mysqli_query($kon, "SELECT * FROM kategori ORDER BY idkategori ASC");
                    while ($j = mysqli_fetch_array($q)) {
                        echo "<option value='$j[idkategori]'>$j[kategorinya]</option>";
                    } ?>
                </datalist>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Thumbnails</label>
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
        </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
                <label>Konten</label>
                <textarea class="textarea" name="konten" rows="4" cols="50" style="width: 100%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
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
$idkonten = $_GET['idkonten'];
$query = mysqli_query($kon, "SELECT * FROM konten JOIN user ON konten.id = user.id JOIN kategori ON konten.idkategori = kategori.idkategori WHERE idkonten = '$idkonten'");
$j = mysqli_fetch_array($query); ?>
<section class="content">
<form action="action.php?tabel=konten&action=ubah&idkonten=<?=$idkonten?>" method="POST" enctype="multipart/form-data">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
                <label>Tanggal Publikasi (WITA)</label>
                <input type="datetime-local" name="waktu" value="<?= date('Y-m-d\TH:i',strtotime($j['waktu'])) ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" value="<?= $j['judul'] ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="idkategori" list="option" class="form-control" value="<?= $j['idkategori'] ?>" required>
                <datalist id="option">
                  <?php $qu = mysqli_query($kon, "SELECT * FROM kategori ORDER BY idkategori ASC");
                    while ($ju = mysqli_fetch_array($qu)) {
                        echo "<option value='$ju[idkategori]'>$ju[kategorinya]</option>";
                    } ?>
                </datalist>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Thumbnails</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="file1" class="custom-file-input" id="exampleInputFile" accept="image/*">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <input type="hidden" name="fileLama" value="<?= $j['thumb'] ?>">
                  <span class="input-group-text" id="">Upload</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
                <label>Konten</label>
                <textarea class="textarea" name="konten" rows="4" cols="50" style="width: 100%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?= $j['konten'] ?></textarea>
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