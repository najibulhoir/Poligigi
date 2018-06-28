<?php
	include "../library/koneksi.php";

	//Grade ID point P34 
	$P34C	= $_POST['P34C'];
	$P34T	= $_POST['P34T'];
	$P34B	= $_POST['P34B'];
	$P34R	= $_POST['P34R'];
	$P34L	= $_POST['P34L'];
	
	
	mysql_query("update odontogram set P34C='$P34C',
									   P34T='$P34T',
									   P34B='$P34B',
									   P34R='$P34R',
									   P34L='$P34L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>