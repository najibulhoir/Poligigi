<?php
	include "../library/koneksi.php";

	//Grade ID point P14 
	$P14C	= $_POST['P14C'];
	$P14T	= $_POST['P14T'];
	$P14B	= $_POST['P14B'];
	$P14R	= $_POST['P14R'];
	$P14L	= $_POST['P14L'];
	
	
	mysql_query("update odontogram set P14C='$P14C',
									   P14T='$P14T',
									   P14B='$P14B',
									   P14R='$P14R',
									   P14L='$P14L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>