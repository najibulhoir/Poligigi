<?php
	include "../library/koneksi.php";

	//Grade ID point P26 
	$P26C	= $_POST['P26C'];
	$P26T	= $_POST['P26T'];
	$P26B	= $_POST['P26B'];
	$P26R	= $_POST['P26R'];
	$P26L	= $_POST['P26L'];
	
	
	mysql_query("update odontogram set P26C='$P26C',
									   P26T='$P26T',
									   P26B='$P26B',
									   P26R='$P26R',
									   P26L='$P26L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>