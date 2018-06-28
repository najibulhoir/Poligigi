<?php
	include "../library/koneksi.php";

	//Grade ID point P61 
	$P61C	= $_POST['P61C'];
	$P61T	= $_POST['P61T'];
	$P61B	= $_POST['P61B'];
	$P61R	= $_POST['P61R'];
	$P61L	= $_POST['P61L'];
	
	
	mysql_query("update odontogram set P61C='$P61C',
									   P61T='$P61T',
									   P61B='$P61B',
									   P61R='$P61R',
									   P61L='$P61L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>