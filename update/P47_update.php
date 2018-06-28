<?php
	include "../library/koneksi.php";

	//Grade ID point P47 
	$P47C	= $_POST['P47C'];
	$P47T	= $_POST['P47T'];
	$P47B	= $_POST['P47B'];
	$P47R	= $_POST['P47R'];
	$P47L	= $_POST['P47L'];
	
	
	mysql_query("update odontogram set P47C='$P47C',
									   P47T='$P47T',
									   P47B='$P47B',
									   P47R='$P47R',
									   P47L='$P47L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>