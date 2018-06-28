<?php
	include "../library/koneksi.php";

	//Grade ID point P54 
	$P54C	= $_POST['P54C'];
	$P54T	= $_POST['P54T'];
	$P54B	= $_POST['P54B'];
	$P54R	= $_POST['P54R'];
	$P54L	= $_POST['P54L'];
	
	
	mysql_query("update odontogram set P54C='$P54C',
									   P54T='$P54T',
									   P54B='$P54B',
									   P54R='$P54R',
									   P54L='$P54L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>