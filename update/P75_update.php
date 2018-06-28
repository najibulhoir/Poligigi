<?php
	include "../library/koneksi.php";

	//Grade ID point P75 
	$P75C	= $_POST['P75C'];
	$P75T	= $_POST['P75T'];
	$P75B	= $_POST['P75B'];
	$P75R	= $_POST['P75R'];
	$P75L	= $_POST['P75L'];
	
	
	mysql_query("update odontogram set P75C='$P75C',
									   P75T='$P75T',
									   P75B='$P75B',
									   P75R='$P75R',
									   P75L='$P75L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>