<?php
	include "../library/koneksi.php";

	//Grade ID point P48 
	$P48C	= $_POST['P48C'];
	$P48T	= $_POST['P48T'];
	$P48B	= $_POST['P48B'];
	$P48R	= $_POST['P48R'];
	$P48L	= $_POST['P48L'];
	
	
	mysql_query("update odontogram set P48C='$P48C',
									   P48T='$P48T',
									   P48B='$P48B',
									   P48R='$P48R',
									   P48L='$P48L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>