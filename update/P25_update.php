<?php
	include "../library/koneksi.php";

	//Grade ID point P25 
	$P25C	= $_POST['P25C'];
	$P25T	= $_POST['P25T'];
	$P25B	= $_POST['P25B'];
	$P25R	= $_POST['P25R'];
	$P25L	= $_POST['P25L'];
	
	
	mysql_query("update odontogram set P25C='$P25C',
									   P25T='$P25T',
									   P25B='$P25B',
									   P25R='$P25R',
									   P25L='$P25L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>