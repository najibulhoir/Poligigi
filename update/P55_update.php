<?php
	include "../library/koneksi.php";

	//Grade ID point P55 
	$P55C	= $_POST['P55C'];
	$P55T	= $_POST['P55T'];
	$P55B	= $_POST['P55B'];
	$P55R	= $_POST['P55R'];
	$P55L	= $_POST['P55L'];
	
	
	mysql_query("update odontogram set P55C='$P55C',
									   P55T='$P55T',
									   P55B='$P55B',
									   P55R='$P55R',
									   P55L='$P55L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>