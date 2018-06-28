<?php
	include "../library/koneksi.php";

	//Grade ID point P12 
	$P12C	= $_POST['P12C'];
	$P12T	= $_POST['P12T'];
	$P12B	= $_POST['P12B'];
	$P12R	= $_POST['P12R'];
	$P12L	= $_POST['P12L'];
	
	
	mysql_query("update odontogram set P12C='$P12C',
									   P12T='$P12T',
									   P12B='$P12B',
									   P12R='$P12R',
									   P12L='$P12L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>