<?php session_start(); error_reporting(1); require("../kon.php"); require('config.php');
	//kategori
	if (isset($_GET['idkategori'])) {
		mysqli_query($kon, "DELETE FROM kategori WHERE idkategori='$_REQUEST[idkategori]'"); 
		henshin('hapus');
	//konten
	}else if (isset($_GET['idkonten'])) {
		$query = mysqli_query($kon, "SELECT * FROM konten WHERE idkonten='$_REQUEST[idkonten]'");
		$row = mysqli_fetch_array($query); unlink('../'.$row['thumb']);
		mysqli_query($kon, "DELETE FROM konten WHERE idkonten='$_REQUEST[idkonten]'"); 
		henshin('hapus');
	//iklan
	}else if (isset($_GET['idiklan'])) {
		$query = mysqli_query($kon, "SELECT * FROM iklan WHERE idiklan='$_REQUEST[idiklan]'");
		$row = mysqli_fetch_array($query); unlink('../'.$row['foto']);
		mysqli_query($kon, "DELETE FROM iklan WHERE idiklan='$_REQUEST[idiklan]'"); 
		henshin('hapus');
	}
?>