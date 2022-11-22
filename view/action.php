<?php
require('../kon.php'); require('config.php'); SESSION_START(); error_reporting(0);
$tabel  = $_REQUEST['tabel'];
$action = $_REQUEST['action'];
if($tabel=='pengguna'){
    $id       = htmlspecialchars($_REQUEST['id'], ENT_QUOTES);
    $nama     = htmlspecialchars($_REQUEST['nama'], ENT_QUOTES);
    $jk       = htmlspecialchars($_REQUEST['jk'], ENT_QUOTES);
    $telp     = htmlspecialchars($_REQUEST['telp'], ENT_QUOTES);
    $email    = htmlspecialchars($_REQUEST['email'], ENT_QUOTES);
    $alamat   = htmlspecialchars($_REQUEST['alamat'], ENT_QUOTES);
    $username = htmlspecialchars($_REQUEST['username'], ENT_QUOTES);

    if ($action=='ubah'){
        mysqli_query($kon, "UPDATE user SET nama='$nama', jk = '$jk', telp='$telp', email = '$email', alamat = '$alamat', username = '$username' WHERE id = '$id'");
        bebeb('ubah','pengguna');
    }
}else if($tabel=='kategori'){
    $idkategori  = htmlspecialchars($_REQUEST['idkategori'], ENT_QUOTES);
    $kategorinya = htmlspecialchars($_REQUEST['kategorinya'], ENT_QUOTES);

    if ($action=='tambah'){
        mysqli_query($kon, "INSERT INTO kategori (kategorinya) VALUES ('$kategorinya')");
        bebeb('simpan','kategori');
    }elseif ($action=='ubah'){
        mysqli_query($kon, "UPDATE kategori SET kategorinya='$kategorinya' WHERE idkategori = '$idkategori'");
        bebeb('ubah','kategori');
    }
}else if($tabel=='konten'){
    $idkonten = htmlspecialchars($_REQUEST['idkonten'], ENT_QUOTES);
    $judul     = htmlspecialchars($_REQUEST['judul'], ENT_QUOTES);
    $idkategori  = htmlspecialchars($_REQUEST['idkategori'], ENT_QUOTES);
    $konten    = $_REQUEST['konten'];
    $waktu     = htmlspecialchars($_REQUEST['waktu'], ENT_QUOTES);
    $view      = htmlspecialchars($_REQUEST['view'], ENT_QUOTES);

    $namafile = $_FILES['file1']['tmp_name'];
    $checkin  = $_FILES['file1']['error'];
    $ukuran   = $_FILES['file1']['size'];
    $lokasi   = $_FILES['file1']['name'];
    $fileLama = $_REQUEST['fileLama'];
    $namabaru = 'assets/file/'.rand(1000,9999).preg_replace("/[^a-zA-Z0-9]/", ".", $lokasi);

    if ($action=='tambah'){
        if($ukuran < 5048000){ 
            move_uploaded_file($namafile, '../'.$namabaru);
            mysqli_query($kon, "INSERT INTO konten (id,judul,idkategori,konten,waktu,view,thumb) 
                VALUES ('$_SESSION[id]','$judul','$idkategori','$konten','$waktu',0,'$namabaru')");
            bebeb('simpan','konten');
        }else{ 
            bebeb('ukuran','konten');
        }
    }elseif ($action=='ubah'){
        if($checkin){
            mysqli_query($kon, "UPDATE konten SET idkategori='$idkategori', judul='$judul', waktu = '$waktu', konten = '$konten', thumb = '$fileLama' WHERE idkonten = '$idkonten'"); bebeb('info','konten');
        }else{
            if($ukuran < 5048000){
                unlink('../'.$fileLama);
                move_uploaded_file($namafile, '../'.$namabaru);
                mysqli_query($kon, "UPDATE konten SET idkategori='$idkategori', judul='$judul', waktu = '$waktu', konten = '$konten', thumb = '$namabaru' WHERE idkonten = '$idkonten'"); bebeb('ubah','konten');
            }else{ 
                bebeb('ukuran','konten');
            }
        }      
    }
}else if($tabel=='profil'){
    $username    = htmlspecialchars($_REQUEST['username'], ENT_QUOTES);
    $usernameOLD = htmlspecialchars($_REQUEST['usernameOLD'], ENT_QUOTES);
    $password    = htmlspecialchars($_REQUEST['password'], ENT_QUOTES);
    $passwordOLD = htmlspecialchars($_REQUEST['passwordOLD'], ENT_QUOTES);
    $nama        = htmlspecialchars($_REQUEST['nama'], ENT_QUOTES);

    if ($action=='ubah'){
        mysqli_query($kon, "UPDATE user SET username='$username', nama = '$nama', password = '$password' WHERE id = '$_SESSION[id]'"); 
        if($usernameOLD == $username AND $passwordOLD == $password){
            bebeb('ubah','profil');
        }else{
            bebeb('ubahTapiLogout','../login');
        }    
    }
}else if($tabel=='iklan'){
    $namafile = $_FILES['file1']['tmp_name'];
    $checkin  = $_FILES['file1']['error'];
    $ukuran   = $_FILES['file1']['size'];
    $lokasi   = $_FILES['file1']['name'];
    $fileLama = $_REQUEST['fileLama'];
    $idiklan  = htmlspecialchars($_REQUEST['idiklan'], ENT_QUOTES);
    $namabaru = 'assets/file/'.rand(1000,9999).preg_replace("/[^a-zA-Z0-9]/", ".", $lokasi);

    if ($action=='tambah'){
        if($ukuran < 5048000){ 
            move_uploaded_file($namafile, '../'.$namabaru);
            mysqli_query($kon, "INSERT INTO iklan (foto) VALUES ('$namabaru')");
            bebeb('simpan','iklan');
        }else{ 
            bebeb('ukuran','iklan');
        }
    }elseif ($action=='ubah'){
        if($checkin){
            mysqli_query($kon, "UPDATE iklan SET foto = '$fileLama' WHERE idiklan = '$idiklan'"); bebeb('info','iklan');
        }else{
            if($ukuran < 5048000){
                unlink('../'.$fileLama);
                move_uploaded_file($namafile, '../'.$namabaru);
                mysqli_query($kon, "UPDATE iklan SET foto = '$namabaru' WHERE idiklan = '$idiklan'"); bebeb('ubah','iklan');
            }else{ 
                bebeb('ukuran','iklan');
            }
        }      
    }
}
?>