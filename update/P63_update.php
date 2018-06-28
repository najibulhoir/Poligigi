<?php
	include "../library/koneksi.php";

	//Grade ID point P63 
	$P63C	= $_POST['P63C'];
	$P63T	= $_POST['P63T'];
	$P63B	= $_POST['P63B'];
	$P63R	= $_POST['P63R'];
	$P63L	= $_POST['P63L'];
	
	
	mysql_query("update odontogram set P63C='$P63C',
									   P63T='$P63T',
									   P63B='$P63B',
									   P63R='$P63R',
									   P63L='$P63L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>