<?php
	include "../library/koneksi.php";

	//Grade ID point P27 
	$P27C	= $_POST['P27C'];
	$P27T	= $_POST['P27T'];
	$P27B	= $_POST['P27B'];
	$P27R	= $_POST['P27R'];
	$P27L	= $_POST['P27L'];
	
	
	mysql_query("update odontogram set P27C='$P27C',
									   P27T='$P27T',
									   P27B='$P27B',
									   P27R='$P27R',
									   P27L='$P27L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>