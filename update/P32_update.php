<?php
	include "../library/koneksi.php";

	//Grade ID point P32 
	$P32C	= $_POST['P32C'];
	$P32T	= $_POST['P32T'];
	$P32B	= $_POST['P32B'];
	$P32R	= $_POST['P32R'];
	$P32L	= $_POST['P32L'];
	
	
	mysql_query("update odontogram set P32C='$P32C',
									   P32T='$P32T',
									   P32B='$P32B',
									   P32R='$P32R',
									   P32L='$P32L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>