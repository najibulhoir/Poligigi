<?php
	include "../library/koneksi.php";

	//Grade ID point P53 
	$P53C	= $_POST['P53C'];
	$P53T	= $_POST['P53T'];
	$P53B	= $_POST['P53B'];
	$P53R	= $_POST['P53R'];
	$P53L	= $_POST['P53L'];
	
	
	mysql_query("update odontogram set P53C='$P53C',
									   P53T='$P53T',
									   P53B='$P53B',
									   P53R='$P53R',
									   P53L='$P53L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>