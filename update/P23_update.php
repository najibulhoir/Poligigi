<?php
	include "../library/koneksi.php";

	//Grade ID point P23 
	$P23C	= $_POST['P23C'];
	$P23T	= $_POST['P23T'];
	$P23B	= $_POST['P23B'];
	$P23R	= $_POST['P23R'];
	$P23L	= $_POST['P23L'];
	
	
	mysql_query("update odontogram set P23C='$P23C',
									   P23T='$P23T',
									   P23B='$P23B',
									   P23R='$P23R',
									   P23L='$P23L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>