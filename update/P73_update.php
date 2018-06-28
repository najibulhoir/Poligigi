<?php
	include "../library/koneksi.php";

	//Grade ID point P73 
	$P73C	= $_POST['P73C'];
	$P73T	= $_POST['P73T'];
	$P73B	= $_POST['P73B'];
	$P73R	= $_POST['P73R'];
	$P73L	= $_POST['P73L'];
	
	
	mysql_query("update odontogram set P73C='$P73C',
									   P73T='$P73T',
									   P73B='$P73B',
									   P73R='$P73R',
									   P73L='$P73L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>