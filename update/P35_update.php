<?php
	include "../library/koneksi.php";

	//Grade ID point P35 
	$P35C	= $_POST['P35C'];
	$P35T	= $_POST['P35T'];
	$P35B	= $_POST['P35B'];
	$P35R	= $_POST['P35R'];
	$P35L	= $_POST['P35L'];
	
	
	mysql_query("update odontogram set P35C='$P35C',
									   P35T='$P35T',
									   P35B='$P35B',
									   P35R='$P35R',
									   P35L='$P35L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>