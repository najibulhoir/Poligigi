<?php
	include "../library/koneksi.php";

	//Grade ID point P13 
	$P13C	= $_POST['P13C'];
	$P13T	= $_POST['P13T'];
	$P13B	= $_POST['P13B'];
	$P13R	= $_POST['P13R'];
	$P13L	= $_POST['P13L'];
	
	
	mysql_query("update odontogram set P13C='$P13C',
									   P13T='$P13T',
									   P13B='$P13B',
									   P13R='$P13R',
									   P13L='$P13L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>