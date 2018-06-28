<?php
	include "../library/koneksi.php";

	//Grade ID point P41 
	$P41C	= $_POST['P41C'];
	$P41T	= $_POST['P41T'];
	$P41B	= $_POST['P41B'];
	$P41R	= $_POST['P41R'];
	$P41L	= $_POST['P41L'];
	
	
	mysql_query("update odontogram set P41C='$P41C',
									   P41T='$P41T',
									   P41B='$P41B',
									   P41R='$P41R',
									   P41L='$P41L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>