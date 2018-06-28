<?php
	include "../library/koneksi.php";

	//Grade ID point P11 
	$P11C	= $_POST['P11C'];
	$P11T	= $_POST['P11T'];
	$P11B	= $_POST['P11B'];
	$P11R	= $_POST['P11R'];
	$P11L	= $_POST['P11L'];
	
	
	mysql_query("update odontogram set P11C='$P11C',
									   P11T='$P11T',
									   P11B='$P11B',
									   P11R='$P11R',
									   P11L='$P11L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>