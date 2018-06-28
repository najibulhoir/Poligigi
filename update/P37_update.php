<?php
	include "../library/koneksi.php";

	//Grade ID point P37 
	$P37C	= $_POST['P37C'];
	$P37T	= $_POST['P37T'];
	$P37B	= $_POST['P37B'];
	$P37R	= $_POST['P37R'];
	$P37L	= $_POST['P37L'];
	
	
	mysql_query("update odontogram set P37C='$P37C',
									   P37T='$P37T',
									   P37B='$P37B',
									   P37R='$P37R',
									   P37L='$P37L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>