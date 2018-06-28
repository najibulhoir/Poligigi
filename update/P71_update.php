<?php
	include "../library/koneksi.php";

	//Grade ID point P71 
	$P71C	= $_POST['P71C'];
	$P71T	= $_POST['P71T'];
	$P71B	= $_POST['P71B'];
	$P71R	= $_POST['P71R'];
	$P71L	= $_POST['P71L'];
	
	
	mysql_query("update odontogram set P71C='$P71C',
									   P71T='$P71T',
									   P71B='$P71B',
									   P71R='$P71R',
									   P71L='$P71L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>