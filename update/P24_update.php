<?php
	include "../library/koneksi.php";

	//Grade ID point P24 
	$P24C	= $_POST['P24C'];
	$P24T	= $_POST['P24T'];
	$P24B	= $_POST['P24B'];
	$P24R	= $_POST['P24R'];
	$P24L	= $_POST['P24L'];
	
	
	mysql_query("update odontogram set P24C='$P24C',
									   P24T='$P24T',
									   P24B='$P24B',
									   P24R='$P24R',
									   P24L='$P24L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>