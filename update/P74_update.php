<?php
	include "../library/koneksi.php";

	//Grade ID point P74 
	$P74C	= $_POST['P74C'];
	$P74T	= $_POST['P74T'];
	$P74B	= $_POST['P74B'];
	$P74R	= $_POST['P74R'];
	$P74L	= $_POST['P74L'];
	
	
	mysql_query("update odontogram set P74C='$P74C',
									   P74T='$P74T',
									   P74B='$P74B',
									   P74R='$P74R',
									   P74L='$P74L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>