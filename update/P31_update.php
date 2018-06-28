<?php
	include "../library/koneksi.php";

	//Grade ID point P31 
	$P31C	= $_POST['P31C'];
	$P31T	= $_POST['P31T'];
	$P31B	= $_POST['P31B'];
	$P31R	= $_POST['P31R'];
	$P31L	= $_POST['P31L'];
	
	
	mysql_query("update odontogram set P31C='$P31C',
									   P31T='$P31T',
									   P31B='$P31B',
									   P31R='$P31R',
									   P31L='$P31L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>