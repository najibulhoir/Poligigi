<?php
	include "../library/koneksi.php";

	//Grade ID point P42 
	$P42C	= $_POST['P42C'];
	$P42T	= $_POST['P42T'];
	$P42B	= $_POST['P42B'];
	$P42R	= $_POST['P42R'];
	$P42L	= $_POST['P42L'];
	
	
	mysql_query("update odontogram set P42C='$P42C',
									   P42T='$P42T',
									   P42B='$P42B',
									   P42R='$P42R',
									   P42L='$P42L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>