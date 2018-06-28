<?php
	include "../library/koneksi.php";

	//Grade ID point P44 
	$P44C	= $_POST['P44C'];
	$P44T	= $_POST['P44T'];
	$P44B	= $_POST['P44B'];
	$P44R	= $_POST['P44R'];
	$P44L	= $_POST['P44L'];
	
	
	mysql_query("update odontogram set P44C='$P44C',
									   P44T='$P44T',
									   P44B='$P44B',
									   P44R='$P44R',
									   P44L='$P44L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>