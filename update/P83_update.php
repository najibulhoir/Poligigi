<?php
	include "../library/koneksi.php";

	//Grade ID point P83 
	$P83C	= $_POST['P83C'];
	$P83T	= $_POST['P83T'];
	$P83B	= $_POST['P83B'];
	$P83R	= $_POST['P83R'];
	$P83L	= $_POST['P83L'];
	
	
	mysql_query("update odontogram set P83C='$P83C',
									   P83T='$P83T',
									   P83B='$P83B',
									   P83R='$P83R',
									   P83L='$P83L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>